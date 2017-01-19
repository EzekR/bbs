$(document).ready(function() {
	$('.nr-li2>a').click(function() {
		$(this).addClass('bgc')
		$(this).parent().siblings().find('a').removeClass('bgc')
	})
	$('.nr-li3>a').click(function() {
		$(this).addClass('bgc')
		$(this).parent().siblings().find('a').removeClass('bgc')
	})
	$('#pageToolbar').Paging({
				pagesize: 1,
				count: 30,
				toolbar: true
		});
		$('.lb1-2>p>a').each(function() {
			var maxlength = 20
			if($(this).text().length > maxlength) {
				var zifushu = $(this).text().substring(0, maxlength)
				$(this).html(zifushu + '..')
			}
		})
		$('.lb1').mouseenter(function() {
		 $(this).find('.img11').attr('src','img/srm.png');
		$(this).find('.img22').attr('src','img/rt.png');
		console.log(1);
	})
		$('.lb1').mouseleave(function() {
		 $(this).find('.img11').attr('src','img/bm.png')
		$(this).find('.img22').attr('src','img/bt.png')
	})
	$('#test').click(function(){
		$(this).css("color", "red");
	})
})
