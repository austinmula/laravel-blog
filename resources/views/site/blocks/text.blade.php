<!-- This is a basic preview. You can use dd($block) to view the data you have access to. <br />This preview file is located at: /var/www/html/resources/views/site/blocks/text.blade.php -->
<div class="prose">
    <h2>{{$block->translatedInput('title')}}</h2>
    {!! $block->translatedInput('text') !!}
</div>