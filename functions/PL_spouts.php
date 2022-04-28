<?php
// Polish hanging spouts (wiszace spojniki)
function spojniki( $tekst ) {
	$z  = array(' o ', ' u ', ' w ', ' z ', ' i ', ' a ',
	 			' O ', ' U ', ' W ', ' Z ', ' I ', ' A ',
				'(o ', '(u ', '(w ', '(z ', '(i ', '(a ',
				'(O ', '(U ', '(W ', '(Z ', '(I ', '(A '
	);
	$na = array(' o&nbsp;', ' u&nbsp;', ' w&nbsp;', ' z&nbsp;', ' i&nbsp;',  ' a&nbsp;',
				' O&nbsp;', ' U&nbsp;', ' W&nbsp;', ' Z&nbsp;', ' I&nbsp;',  ' A&nbsp;',
				'(o&nbsp;', '(u&nbsp;', '(w&nbsp;', '(z&nbsp;', '(i&nbsp;',  '(a&nbsp;',
				'(O&nbsp;', '(U&nbsp;', '(W&nbsp;', '(Z&nbsp;', '(I&nbsp;',  '(A&nbsp;'
	);
	return str_replace( $z, $na, $tekst );
}
add_filter( 'the_content',  'spojniki' );
add_filter( 'the_title',    'spojniki' );
add_filter( 'comment_text', 'spojniki' );