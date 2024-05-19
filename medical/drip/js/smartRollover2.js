// JavaScript Documentfunction smartRollover() {

$(function()  
{  
        var targetImgs = $('img');  
          
        targetImgs.each(function()  
        {  
            if(this.src.match('btn'))  
            {  
			//拡張子がjpgの場合
            if(this.src.match('jpg'))  
            {  
                this.rollOverImg = new Image();  
                this.rollOverImg.src = this.getAttribute("src").replace(".jpg", "_s2.jpg");  
                $(this.rollOverImg).css({position: 'absolute', opacity: 0});  
                $(this).before(this.rollOverImg);  
                  
                //ブラウザバック時の不具合防止　不要なら削除。  
                $(this.rollOverImg).mousedown(function(){  
                    $(this).stop().animate({opacity: 0}, {duration: 0, queue: false});  
                });  
                
				//durationの値でマウスオーバーのスピード調整  
                $(this.rollOverImg).hover(function(){  
                    $(this).animate({opacity: 1}, {duration: 100, queue: false});  
                },  
				//durationの値でマウスアウトのスピード調整  
                function(){  
                    $(this).animate({opacity: 0}, {duration: 100, queue: false});  
                });  
                  
            }  

			//拡張子がgifの場合
            else if(this.src.match('gif'))  
            {  
                this.rollOverImg = new Image();  
                this.rollOverImg.src = this.getAttribute("src").replace(".gif", "_s2.gif");  
                $(this.rollOverImg).css({position: 'absolute', opacity: 0});  
                $(this).before(this.rollOverImg);  
                  
                //ブラウザバック時の不具合防止　不要なら削除。  
                $(this.rollOverImg).mousedown(function(){  
                    $(this).stop().animate({opacity: 0}, {duration: 0, queue: false});  
                });  
                
				//durationの値でマウスオーバーのスピード調整  
                $(this.rollOverImg).hover(function(){  
                    $(this).animate({opacity: 1}, {duration: 100, queue: false});  
                },  
				//durationの値でマウスアウトのスピード調整  
                function(){  
                    $(this).animate({opacity: 0}, {duration: 100, queue: false});  
                });  
                  
            }  

			//拡張子がgifの場合
            else if(this.src.match('png'))  
            {  
                this.rollOverImg = new Image();  
                this.rollOverImg.src = this.getAttribute("src").replace(".png", "_s2.png");  
                $(this.rollOverImg).css({position: 'absolute', opacity: 0});  
                $(this).before(this.rollOverImg);  
                  
                //ブラウザバック時の不具合防止　不要なら削除。  
                $(this.rollOverImg).mousedown(function(){  
                    $(this).stop().animate({opacity: 0}, {duration: 0, queue: false});  
                });  
                
				//durationの値でマウスオーバーのスピード調整  
                $(this.rollOverImg).hover(function(){  
                    $(this).animate({opacity: 1}, {duration: 100, queue: false});  
                },  
				//durationの値でマウスアウトのスピード調整  
                function(){  
                    $(this).animate({opacity: 0}, {duration: 100, queue: false});  
                });  
                  
            }  



			}
        });  
});  
