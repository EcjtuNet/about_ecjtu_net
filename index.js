<<<<<<< HEAD
// JavaScript Document
       function $(id){
		    return document.getElementById(id);
		  }
//get className
	function getClassName(classN){
		if(document.getElementsByClass){
			return document.getElementsByClass(classN);
			}
			var ret=[];
			var nodes=document.getElementsByTagName('*');
			for(var i=0,len=nodes.length;i<len;i++){
				var names=nodes[i].className.split(/\s+/);
				for(var j=0,lenN=names.length;j<lenN;j++){
					  if(names[j]==classN){
						  ret.push(nodes[i]);
						  }
					}  
				}
			return ret;
	   }

//change class name
//change backgroud color
	function display(value,option,grp,valueSco)
	{
		for(var i = 0; i < grp.length; i ++ )
		{
			var pattern=new RegExp("(^| )" + value +"( |$)");
			if(pattern.test(grp[i].className))
			{    
				grp[i].className = valueSco;
			}
		  }
		option.className += " " + value;
		return true;
	}

//move decelerate	
		function movedif(target,desTop,maxSpeed)
	{
		var curTop = parseInt(reComSty(target,"top"));
		if(isNaN(curTop))
		{
			curTop = 0;
		}
		if (typeof target.floatingPoinTop == "undefined")
		{
			target.floatingPointTop = curTop;
		}
		var deceTop = 1 + Math.abs(desTop - target.floatingPointTop) / 10;
		if (deceTop > maxSpeed)
		{
			deceTop = maxSpeed;
		}
		if (target.floatingPointTop < desTop)
		{
			target.floatingPointTop += deceTop;
			if(target.floatingPointTop > desTop)
			{
				target.floatingPointTop = desTop;
			}
		}
		else
		{
			target.floatingPointTop -= deceTop;
			if(target.floatingPointTop < desTop)
			{
				target.floatingPointTop = desTop;
			}
		}
		target.style.top = parseInt(target.floatingPointTop) + "px";
		
		if(target.floatingPointTop == desTop)
		{
			window.clearInterval(target.ani);
		}
	}

//get element style	
	function reComSty(ele,styPro)
	{
		var comSty = null;
		if( typeof ele.currentStyle != "undefined")
		{
			comSty = ele.currentStyle;
		}
		else
		{
			comSty = document.defaultView.getComputedStyle(ele,null);
		}
				return comSty[styPro];
	}

//send cookie	
    function sentCookie(ob)
	{
		var cookieValue = ob.innerHTML;
		var cookieName = "year";
		var theCookie = cookieName + "=" + cookieValue;
		document.cookie = theCookie;
	}	
	
	 
	var bloc=getClassName('side_a');
	var grpA=getClassName('grp_a');
	var adA=getClassName('ad_a');
	var nav=getClassName('nav_a');
	var even=getClassName('even');
	var group=getClassName('group');
	var ad=getClassName('ad')
	nav[0].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[0],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),5,500)",5);
	}
	nav[1].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[1],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-495,500)",5);
	}
	nav[2].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[2],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-995,500)",5);
		
	}
	nav[3].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[3],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-1495,500)",5);
		
	}
	/*nav[4].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[4],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-1995,500)",5);
	}*/
	
	bloc[0].onmouseover=function(){
		 sentCookie(bloc[0]);
		 display('show',even[0],even,'even');
		 display('bright',bloc[0],bloc,'side_a');
		   };
	bloc[1].onmouseover=function(){
		 sentCookie(bloc[1]);
		 display('show',even[1],even,'even');
		 display('bright',bloc[1],bloc,'side_a');
		   };
	bloc[2].onmouseover=function(){
		sentCookie(bloc[2]);
		display('show',even[2],even,'even');
		display('bright',bloc[2],bloc,'side_a');
		};
	bloc[3].onmouseover=function(){
		display('show',even[3],even,'even');
		display('bright',bloc[3],bloc,'side_a');
		};
	grpA[0].onmouseover=function(){
		sentCookie(grpA[0]);
		display('show',group[0],group,'group');
		display('bright',grpA[0],grpA,'grp_a');
		};
	grpA[1].onmouseover=function(){
		sentCookie(grpA[1]);
		display('show',group[1],group,'group');
		display('bright',grpA[1],grpA,'grp_a');
		};
	grpA[2].onmouseover=function(){
		sentCookie(grpA[2]);
		display('show',group[2],group,'group');
		display('bright',grpA[2],grpA,'grp_a');
		};
	grpA[3].onmouseover=function(){
		sentCookie(grpA[3]);
		display('show',group[3],group,'group');
		display('bright',grpA[3],grpA,'grp_a');
		};
	grpA[4].onmouseover=function(){
		sentCookie(grpA[4]);
		display('show',group[4],group,'group');
		display('bright',grpA[4],grpA,'grp_a');
		};
	adA[0].onmouseover=function(){
		sentCookie(adA[0]);
		display('show',ad[0],ad,'ad');
		display('bright',adA[0],adA,'ad_a');
		};
	adA[1].onmouseover=function(){
		sentCookie(adA[1]);
		display('show',ad[1],ad,'ad');
		display('bright',adA[1],adA,'ad_a');
		};
=======
// JavaScript Document
       function $(id){
		    return document.getElementById(id);
		  }
//get className
	function getClassName(classN){
		if(document.getElementsByClass){
			return document.getElementsByClass(classN);
			}
			var ret=[];
			var nodes=document.getElementsByTagName('*');
			for(var i=0,len=nodes.length;i<len;i++){
				var names=nodes[i].className.split(/\s+/);
				for(var j=0,lenN=names.length;j<lenN;j++){
					  if(names[j]==classN){
						  ret.push(nodes[i]);
						  }
					}  
				}
			return ret;
	   }

//change class name
//change backgroud color
	function display(value,option,grp,valueSco)
	{
		for(var i = 0; i < grp.length; i ++ )
		{
			var pattern=new RegExp("(^| )" + value +"( |$)");
			if(pattern.test(grp[i].className))
			{    
				grp[i].className = valueSco;
			}
		  }
		option.className += " " + value;
		return true;
	}

//move decelerate	
		function movedif(target,desTop,maxSpeed)
	{
		var curTop = parseInt(reComSty(target,"top"));
		if(isNaN(curTop))
		{
			curTop = 0;
		}
		if (typeof target.floatingPoinTop == "undefined")
		{
			target.floatingPointTop = curTop;
		}
		var deceTop = 1 + Math.abs(desTop - target.floatingPointTop) / 10;
		if (deceTop > maxSpeed)
		{
			deceTop = maxSpeed;
		}
		if (target.floatingPointTop < desTop)
		{
			target.floatingPointTop += deceTop;
			if(target.floatingPointTop > desTop)
			{
				target.floatingPointTop = desTop;
			}
		}
		else
		{
			target.floatingPointTop -= deceTop;
			if(target.floatingPointTop < desTop)
			{
				target.floatingPointTop = desTop;
			}
		}
		target.style.top = parseInt(target.floatingPointTop) + "px";
		
		if(target.floatingPointTop == desTop)
		{
			window.clearInterval(target.ani);
		}
	}

//get element style	
	function reComSty(ele,styPro)
	{
		var comSty = null;
		if( typeof ele.currentStyle != "undefined")
		{
			comSty = ele.currentStyle;
		}
		else
		{
			comSty = document.defaultView.getComputedStyle(ele,null);
		}
				return comSty[styPro];
	}

//send cookie	
    function sentCookie(ob)
	{
		var cookieValue = ob.innerHTML;
		var cookieName = "year";
		var theCookie = cookieName + "=" + cookieValue;
		document.cookie = theCookie;
	}	
	
	 
	var bloc=getClassName('side_a');
	var grpA=getClassName('grp_a');
	var adA=getClassName('ad_a');
	var nav=getClassName('nav_a');
	var even=getClassName('even');
	var group=getClassName('group');
	var ad=getClassName('ad')
	nav[0].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[0],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),5,500)",5);
	}
	nav[1].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[1],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-495,500)",5);
	}
	nav[2].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[2],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-995,500)",5);
		
	}
	nav[3].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[3],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-1495,500)",5);
		
	}
	/*nav[4].onclick=function(){
		window.clearInterval($('scr').ani);
		display('dif',nav[4],nav,'nav_a');
		$('scr').ani =
		window.setInterval("movedif($('scr'),-1995,500)",5);
	}*/
	
	bloc[0].onmouseover=function(){
		 sentCookie(bloc[0]);
		 display('show',even[0],even,'even');
		 display('bright',bloc[0],bloc,'side_a');
		   };
	bloc[1].onmouseover=function(){
		 sentCookie(bloc[1]);
		 display('show',even[1],even,'even');
		 display('bright',bloc[1],bloc,'side_a');
		   };
	bloc[2].onmouseover=function(){
		sentCookie(bloc[2]);
		display('show',even[2],even,'even');
		display('bright',bloc[2],bloc,'side_a');
		};
	bloc[3].onmouseover=function(){
		display('show',even[3],even,'even');
		display('bright',bloc[3],bloc,'side_a');
		};
	grpA[0].onmouseover=function(){
		sentCookie(grpA[0]);
		display('show',group[0],group,'group');
		display('bright',grpA[0],grpA,'grp_a');
		};
	grpA[1].onmouseover=function(){
		sentCookie(grpA[1]);
		display('show',group[1],group,'group');
		display('bright',grpA[1],grpA,'grp_a');
		};
	grpA[2].onmouseover=function(){
		sentCookie(grpA[2]);
		display('show',group[2],group,'group');
		display('bright',grpA[2],grpA,'grp_a');
		};
	grpA[3].onmouseover=function(){
		sentCookie(grpA[3]);
		display('show',group[3],group,'group');
		display('bright',grpA[3],grpA,'grp_a');
		};
	grpA[4].onmouseover=function(){
		sentCookie(grpA[4]);
		display('show',group[4],group,'group');
		display('bright',grpA[4],grpA,'grp_a');
		};
	adA[0].onmouseover=function(){
		sentCookie(adA[0]);
		display('show',ad[0],ad,'ad');
		display('bright',adA[0],adA,'ad_a');
		};
	adA[1].onmouseover=function(){
		sentCookie(adA[1]);
		display('show',ad[1],ad,'ad');
		display('bright',adA[1],adA,'ad_a');
		};
>>>>>>> logo
