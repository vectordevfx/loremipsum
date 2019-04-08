<?php
function generateLorem($words){
	$string = 'lorem ipsum dolor sit amet consectetur adipiscing elit morbi a sem sed dui pellentesque aliquam etiam mattis tortor non risus efficitur et ultricies sapien suscipit ut libero ligula facilisis eleifend aliquam urna egestas eu magna vel elementum pretium purus class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos himenaeos suspendisse eget consequat enim venenatis laoreet vitae nec neque aenean euismod bibendum tellus dictum vulputate mauris donec porttitor nisl nisl ac auctor pulvinar vitae quisque tempus vel maximus accumsan nisi metus ultrices massa finibus lorem nibh amet ante vivamus ullamcorper scelerisque placerat mauris urna dapibus odio proin tincidunt praesent in nisl integer velit id erat nec lobortis porta sapien cras neque sem tristique sed tempor nulla nam elit ligula sed condimentum lectus aliquet iaculis eleifend commodo id lectus ex ipsum lacinia faucibus efficitur nunc aliquet ac pellentesque imperdiet diam congue sollicitudin nullam turpis at quam sollicitudin pharetra quis felis duis orci metus semper volutpat eget fusce eros rutrum in purus dolor maecenas vulputate congue mauris blandit at erat odio mattis ut leo fringilla magna arcu hendrerit vestibulum tellus nulla varius phasellus vestibulum scelerisque est augue nisi cursus felis malesuada rhoncus leo hendrerit massa sed elit interdum posuere viverra sagittis ullamcorper vestibulum porttitor nulla nulla et dui est urna placerat dapibus suscipit augue mollis velit tempus lorem orci lacus sodales tincidunt dignissim est ante rutrum turpis nibh tellus venenatis eleifend egestas tristique justo pellentesque mauris fermentum dignissim feugiat varius mi eu iaculis ornare scelerisque facilisi tempus orci natoque penatibus magnis dis parturient montes nascetur ridiculus mus eros curabitur convallis laoreet quam rhoncus feugiat accumsan auctor posuere justo porta nunc laoreet gravida nisi auctor leo habitant morbi senectus netus fames ultricies augue hac habitasse platea dictumst lorem ut mi dui vehicula in eu lacus quis aliquam non velit lacinia ex venenatis libero sodales porttitor odio molestie malesuada blandit risus purus nunc libero pharetra mi metus vel interdum primis faucibus vestibulum maximus ipsum luctus cubilia curae cursus dapibus pellentesque consectetur arcu enim fermentum lacus fringilla a elementum eget dictum gravida diam ut molestie ex at arcu non congue feugiat lectus nunc semper viverra neque potenti malesuada interdum sodales eros condimentum imperdiet turpis finibus rhoncus ligula ornare volutpat nibh pretium vitae tempor sem id tortor imperdiet mollis sagittis placerat fermentum orci ante tortor maximus mattis in sapien vulputate fringilla euismod cursus pulvinar dignissim facilisis ac amet finibus tincidunt luctus aliquet ultricies magna commodo lobortis massa vehicula tempor iaculis condimentum erat facilisis sollicitudin pretium porta bibendum consequat interdum convallis quam hendrerit molestie luctus risus diam tristique ullamcorper convallis posuere rutrum ornare sagittis bibendum lacinia pharetra dolor lobortis efficitur dictum et quis accumsan enim mollis consectetur justo euismod aliquam ultrices gravida semper felis vehicula egestas blandit nec suscipit viverra a elementum volutpat commodo faucibus ultrices pulvinar varius';
	$array = explode(" ",$string);
	$count = count($array) - 1; 	
	for ($x = 0; $x < $words; $x++) {
		$rand_keys[] = mt_rand( 0,$count);
	} 	
	$counter = 0;
	foreach ($rand_keys as $value) {
		$density[] = $array[$value];
		if ($counter === 0){
			echo ucfirst($array[$value]);
		}else{
			echo  $array[$value];
		}		
		// detect end of line
		if($counter === $words-1){
			echo '.';
			break;
		}
		$counter++;
		if($counter % 5 == 0 && $counter !== 0){
			echo ', ';
		}else{
			echo ' ';
		}
	}	
}

// generate some random lorem ipsum words
generateLorem(100);
?>
