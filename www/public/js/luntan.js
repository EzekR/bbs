$(document).ready(function() {
	//分页
// $('#pageToolbar').Paging({
// 				pagesize: 1,
// 				count: 25,
// 				toolbar: true
// 		});

	//
	// $(function() {
	// 		var bodyPages = document.querySelectorAll(".lb-f1");
	// 		var tags = document.querySelectorAll(".nr-bottom-li2");
	// 		for(var i = 0; i < tags.length; i++) {
	// 			tags[i].index = i;
	// 			tags[i].onclick = function() {
	// 				for(j = 0; j < bodyPages.length; j++) {
	// 					bodyPages[j].style.display = "none";
	// 				}
	// 				bodyPages[this.index].style.display = "block";
	// 			}
	// 		}
	// 	});
	//
	$('.div1>ul>a>li').click(function() {
			$('.div1>ul>a>li').addClass('nr-bottom-li1')
			$(this).find('.img33').attr('src', 'img/rjt.png')
//			$(this).find('.img33').css('transform', 'rotate(180deg)')
			$(this).parent().siblings().find('.img33').attr('src', 'img/bjt.png')
//			$(this).parent().siblings().find('.img33').css('transform', 'rotate(0deg)')
			$('.div1>ul>a>li').not($(this)).removeClass('nr-bottom-li1')
		})
	$('.nr-li4').click(function() {
				if($('.uls').hasClass('he')) {
					$('.nr-li4>a').html('收起')
					$('.nr-li4>span').removeClass('icon-caret-down')
					$('.nr-li4>span').addClass('icon-caret-up')
					$('.uls').removeClass('he')
				} else {
					$('.nr-li4>a').html('更多')
					$('.uls').addClass('he')
					$('.nr-li4>span').removeClass('icon-caret-up')
					$('.nr-li4>span').addClass('icon-caret-down')
				}
			})
	$('.nr-li2>a').click(function() {
		$(this).addClass('bgc')
		$(this).parent().siblings().find('a').removeClass('bgc')
	})
	$('.nr-li3>a').click(function() {
		$(this).addClass('bgc')
		$(this).parent().siblings().find('a').removeClass('bgc')
	})
		// 		$('.lb1-2>p>a').each(function() {
		// 	var maxlength = 20
		// 	if($(this).text().length > maxlength) {
		// 		var zifushu = $(this).text().substring(0, maxlength)
		// 		$(this).html(zifushu + '..')
		// 	}
		// })
	$('.lb1').mouseenter(function() {
		 $(this).find('.img11').attr('src','img/srm.png');
		$(this).find('.img22').attr('src','img/rt.png');
	})
		$('.lb1').mouseleave(function() {
		 $(this).find('.img11').attr('src','img/bm.png')
		$(this).find('.img22').attr('src','img/bt.png')
	})
	$('.nr-li3>a').mouseenter(function(){
		$(this).addClass('bgc');
	})
	$('.nr-li3>a').mouseleave(function(){
		$(this).removeClass('bgc');
	})
	$('.nr-bk1-3').mouseenter(function(){
		$(this).find('#img-min').attr('src', 'img/srm.png');
	})
	$('.nr-bk1-3').mouseleave(function(){
		$(this).find('#img-min').attr('src', 'img/bm.png');
	})

})
 // $(function() {
 // 	//当前页
	// $('.curren_page').html($('.focus').html());
	
	// //总页
	// $('.total_page').html(function() {
	// 	var total_page = $('#curren_page').html();
	// 	total_page = total_page.replace('共', '').replace('页', '');
	// 	return (total_page);
	// });
	
	// //上一页
	// $('.previous_page').attr('href', function() {
	// 	var previous_page = $('#previous_page');
	// 	if(previous_page.length == 0) {
	// 		return ('javascript:;');
	// 	} else {
	// 		return (previous_page.parent().attr('href'));
	// 	}
	// }).mouseover(function() {
	// 	if($('#previous_page').length > 0) {
	// 		$(this).css('color', '#d2020f');
	// 	}
	// }).mouseout(function() {
	// 	$(this).css('color', 'white');
	// });
	
	// //下一页
	// $('.next_page').attr('href', function() {
	// 	var next_page = $('#next_page');
	// 	if(next_page.length == 0) {
	// 		return ('javascript:;');
	// 	} else {
	// 		return (next_page.parent().attr('href'));
	// 	}
	// }).mouseover(function() {
	// 	if($('#next_page').length > 0) {
	// 		$(this).css('color', '#d2020f');
	// 	}
	// }).mouseout(function() {
	// 	$(this).css('color', 'white');
	// });

 //})