function changePage(page,ctrl){
	jQuery('input[name=filter_page]').val(page);
	jQuery(ctrl).closest('form')[0].submit();	
}
function tuVanShowHide(){
	var tu_van_box_ctrl=jQuery('.tu_van_box');
	var right_value=jQuery(tu_van_box_ctrl).css("right");	
	if(right_value == '0px'){
		jQuery(tu_van_box_ctrl).css({
			right: '-180px'
		});
	}else{
		jQuery(tu_van_box_ctrl).css({
			right: '0px'
		});
	}	
}
function changeImg(image,title){    
		var image_detail=jQuery(".box_img_w");
		var imghtml='<a href="'+image+'" title="'+title+'" class="smlightbox"><div class="img-detail" style="background-image: url('+image+');"></div></a>';        
		jQuery(image_detail).empty();
		jQuery(image_detail).append(imghtml);	
		jQuery('.smlightbox').simpleLightbox();
	}	 
function showFrmSearch(){
	jQuery('.pan_search').show();
}
function closeFrmSearch(){
	jQuery('.pan_search').hide();
}
function openCity(evt, cityName) {    
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}   
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}   
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
}
jQuery(document).ready(function($){		
	/* begin counter */
	$('.counter').counterUp({
            delay: 10,
            time: 1000
        });
	/* end counter */
	/* begin tu_van_box */
	setInterval(tuVanShowHide,9000);
	/* end tu_van_box */
	$('.toggle').on('click',function(){
		var ul_root=$(this).closest('ul.category_product');
		var li_current= $(ul_root).find('li.current_li');
		$(li_current).children('ul').slideUp();		
		var li=$(this).closest('li');
		$(li).addClass('current_li');
		var ul= $(li).children('ul');
		var status=$(ul).css('display');
		if(status=='none'){
			$(ul).slideDown();			
		}else{
			$(ul).slideUp();			
		}		
	});
	$('.smlightbox').simpleLightbox();	
	/* start tab */
	$("div.tab > button.tablinks:first-child").addClass('active');
	$(".tabcontent:first-child").css("display","block");
	/* end tab */
});