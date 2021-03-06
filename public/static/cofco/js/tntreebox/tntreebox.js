/*! tn tree box 1.1 author:weiyingbin email:277612909@qq.com
//@ object webiste:http://www.39gs.com/archive/326.html
//@
*/
var _tnTreebox = function(){};
var _tnTreebox_id = 0;
_tnTreebox.prototype = {
	data:null,
	dom_id:null,
	old_selected:null,
	width:0,
	init:function(dom_id,data,selected){
		this.dom_id = dom_id;
		this.data = data;
		this.old_selected = selected;
	},
	makeHtml:function(){
		var _data = {};
		for(var i in this.data){
			var d = this.data[i];
			if(!d.hasOwnProperty('cid')){
				d.cid = 0;
			}
			if(typeof(_data[d.cid]) != 'object'){
				_data[d.cid] = [d];
			}else{
				_data[d.cid].push(d);
			}
		}
		var html= "";
		for(var cid in _data){
			var list = _data[cid];
			var html_list = "<li><input type='text' class='search' placeholder='输入文字搜索' /></li>";
			for(var j in list){
				var item = list[j];
				if(this.old_selected&&$.inArray(item.id,this.old_selected)!=-1){
					var checked = " checked='checked'";
				}else{
					var checked = "";
				}
				if(checked==''){
					try{
						if(item.is_select){
							checked = " checked='checked'";
						}
					}catch(err){

					}
				}
				var _class = "";
				if(typeof(_data[item.id]) == 'object'){
					_class+=" children";
				}
				try{
					if(item.is_hidden){
						_class+=" hide2";
					}
				}catch(err){

				}

				if(_class){
					_class = " class='"+_class+"'";
				}

				_tnTreebox_id++;
				var id = 'treebox_'+_tnTreebox_id; //for='"+id+"' for会导致误点 先去掉
				var box = "<input"+checked+" type='checkbox' id='"+item.id+"' value='"+item.id+"' />";
				try{
					if(item.no_box){
						box = '';
					}
				}catch(err){

				}
				html_list+="<li"+_class+" v="+item.id+"><em>"+box+"</em><label>"+item.value+"</label><span></span></li>";
			}
			var _class = 'box';
			if(cid==='1'){
				_class += " root";
			}else{
				_class += " hide";
			}
			if(_class){
				_class = " class='"+_class+"'";

			}
			html_list = "<div cid="+cid+_class+"><ul>"+html_list+"</ul></div>";
			html+=html_list;
		}
		html = "<div class='header'></div><div class='list'>"+html+"</div>";
		$("#"+this.dom_id).addClass('tntreebox').html(html);
		this.width = $("#"+this.dom_id).width();
		this.setWidth();
		var that = this;
		$("#"+this.dom_id+" .children").on('click',function(){
			that.showChildren(this);
		});
		$("#"+this.dom_id+" :checkbox").on('change',function(){
			that.showChecked();
		});

		//搜索
		$("#"+this.dom_id+" .search").on('input',function(){
			var text = $(this).val();
			$(this).parent().siblings("li").removeClass('hide');
			if(text){
				$(this).parent().siblings("li").each(function(){
					var value = $(this).find('label').text();
					if(value.indexOf(text)==-1){
						$(this).addClass('hide');
					}
				});
			}
		});
		that.showChecked();
	},
	setWidth:function(){
		var objs = $("#"+this.dom_id+" .box:visible");
		var num = objs.size();
		var w = this.width/num;
		objs.width(w-10);
	},
	showChildren:function(e){
		var li = $(e);
		li.parent().find('.cur').removeClass('cur');
		li.addClass('cur');
		var id = li.attr('v');
		var col = li.parent().parent().attr('col');
		if(!col){
			col = 0;
		}
		var _col = col;
		while(1){
			_col++;
			var o = $("#"+this.dom_id+" div[col="+_col+"]");
			if(o.size()>0){
				o.hide();
			}else{
				break;
			}
		}
		$("#"+this.dom_id+" div[cid="+id+"]").attr('col',col*1+1).removeClass('hide').show();
		this.setWidth();
	},
	showChecked:function(){
		var html = '';
		$("#"+this.dom_id+" input:checked").not('.hide2 input:checked').each(function(i,e){
			var text = $(this).parent().next('label').html();
			var id = $(this).parent().parent().attr('v');
			//var id = $(this).val();
			html += "<div class='tag' value="+id+">"+text+"<span v="+id+">x</span></div>";
		});
		if(html){
			html+=" <a>清空</a>";
		}
		$("#"+this.dom_id+" .header").html(html);
		$("#"+this.dom_id+" .header span").on('click',function(){

			console.log("wo shi span");
			var obj = $(this);
			var id = obj.attr('v');
			console.log(id);
			if(obj.parent().parent().find('div').size()<2){
				console.log("obj.parent.parent");
				obj.parent().parent().find('a').remove();
			}
			var p = obj.parent().parent().next(".list").find(':checkbox[value='+id+']').prop('checked',false);
			obj.parent().remove();
		});
		var that = this;
		$("#"+this.dom_id+" .header a").on('click',function(){
			var obj = $(this);
			obj.parent().next('.list').find(':checkbox').prop('checked',false);
			obj.parent().html('');
			$("#"+that.dom_id+" .selected").removeClass('selected');
		});
		//选中背景加深
		$("#"+this.dom_id+" .selected").removeClass('selected');

		$("#"+this.dom_id+" input:checked").each(function(){
			that.selected($(this).parent().parent());
		});

		//$("#"+this.dom_id+" input:checked").parent().addClass('selected');
	},selected:function(obj){
		$(obj).addClass('selected');
		var top_div = $(obj).parent().parent();
		var parentid = top_div.attr('cid');
		if(parentid){
			this.selected("#"+this.dom_id+" li[v="+parentid+"]");
		}
	}
};

function tnTreeBox(id,data,selected){
	var obj = new _tnTreebox();
	obj.init(id,data,selected);
	obj.makeHtml();
}