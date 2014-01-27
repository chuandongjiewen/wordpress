// JavaScript Document
$(document).ready(function(){
	var rolling=$("#rolling"),
	imgs=$("#rolling img"),
	imgsSum=imgs.length,
	width=rolling.width(),
	prev=$("#prev"),
	next=$("#next");
	slide1=new slideone(width,imgsSum,rolling,prev,next);

	var rDiv=$("#r_div"),
	imgs2=$("#r_div img"),
	width2=121;
	slidetwo(rDiv,imgs2,width2);
	var teacherUL=$("#teacher2 ul");
	lis=$("#teacher2 ul li"),
	width3=86;		
    slidetwo(teacherUL,lis,width3);
});
    	var slidetwo=function (parent,child,width){
		var content=parent.html();
		content=content+content;
		parent.html(content);
		var width1=child.length*2*width;
		parent.width(width1);
		var width2=(-1)*width1/2;
		var DIV=parent;
		slide=new slideLittle(parent,width2);
		parent.mouseout(function(){
		slideLittle(parent,width2);});
	}
		function slideLittle(DIV,width2){	
			var left=DIV.position().left;
			DIV.animate({left:left-2+"px"},1);
			if(left<width2)
			{
			DIV.animate({left:-5+"px"},1);
			}
			var timer1=setTimeout(function(){slideLittle(DIV,width2);},100);
			DIV.mouseover(function(){clearTimeout(timer1);});
		}
	
var slideone=function (width1,imgsSum,tagName,prevId,nextId){//对tagName 操作，点击“上一张”，“下一张”切换图片
	if(navigator.userAgent.indexOf("MSIE")>0) {
		prevId=prevId.parent();
		nextId=nextId.parent();
	}
		this.width=width1;
		this.imgsSum=imgsSum;
		this.tagName=tagName;
		tagName.css("width",width1*imgsSum+"px");
		var i=0;
		nextId.mouseover(function(){this.src="../images/next_on.png";});
		nextId.mouseleave(function(){this.src="../images/next.png";});
		prevId.mouseleave(function(){this.src="../images/prev.png";});
	prevId.click(function(){
		if(i>0)
			{
				i--;
				tagName.animate({left:width1*(-i)+"px"},1000);
				nextId.mouseover(function(){this.src="../images/next_on.png";});
				if(i==0){prevId.unbind('mouseover');}
			}
		});
	nextId.click(function(){
		if(i<imgsSum-1)
			{
				i++;
				tagName.animate({left:width1*(-i)+"px"},1000);
				prevId.mouseover(function(){this.src="../images/prev_on.png";});
				if(i==imgsSum-1){nextId.unbind('mouseover');}
			}
		});

}

