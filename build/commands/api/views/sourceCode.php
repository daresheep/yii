<div class="sourceCode">
<b>源码：</b> <?php echo $this->renderSourceLink($object->sourcePath,$object->startLine); ?> (<b><a href="#" class="show">show</a></b>)
<div class="code"><?php echo $this->highlight($object->getSourceCode()); ?></div>
</div>