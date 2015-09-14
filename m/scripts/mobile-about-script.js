$(document).ready(function(){
		$('.nav li').click( function ( event ) {
			if ( $(this).attr('class') !=='yellow'){
				$(this).siblings('.yellow').removeClass('yellow')
				.end().addClass('yellow');
				var idx = $(this).index();
				$('.nav li ul').eq(idx).addClass('show').parent().siblings().children('.show').removeClass('show');
				$('.content').eq(idx).addClass('show').siblings('.show').removeClass('show');
			}
		});
		$('#thing li').click( function() {
				if ( $(this).attr('class') !=='black'){
					$(this).siblings('.black').removeClass('black')
					.end().addClass('black');
					var exidx = $(this).index();
					$('.thing').eq(exidx).addClass('show').siblings('.show').removeClass('show');
				}						
		});
		$('#team li').click( function() {
				if ( $(this).attr('class') !=='black'){
					$(this).siblings('.black').removeClass('black')
					.end().addClass('black');
					var midx = $(this).index();
					$('.team').eq(midx).addClass('show').siblings('.show').removeClass('show');
				}						
		});
		$('#service li').click( function() {
				if ( $(this).attr('class') !=='black'){
					$(this).siblings('.black').removeClass('black')
					.end().addClass('black');
					var nidx = $(this).index();
					$('.service').eq(nidx).addClass('show').siblings('.show').removeClass('show');
				}						
		});
});
