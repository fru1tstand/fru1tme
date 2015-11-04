<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>JS-Less Reactive HTML</h1>
			<p>Visiting some uncommon CSS selectors to produce pretty neat effects without
				JavaScript</p>
		</div>
	</div>

	<div class="content-push"></div>
	<div class="container">
		<div class="comment">Article in progress...</div>
	</div>

</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Code / Reactive HTML")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
