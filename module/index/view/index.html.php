<?php
/**
 * The html template file of index method of index module of zentaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<?php include '../../common/view/header.html.php';?>
<div class='container'>
  <div class="hero-unit">
    <p>
      <?php echo $lang->intro;?>
    </p>
    <p><?php echo html::a('http://devel.cnezsoft.com/', $lang->more, "target='_blank'");?></p>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="panel alert">
      <h4> <i class='icon icon-code'> </i> 代码简单</h4>
      <p>zentaoPHP框架核心只有四个文件，简单易读，可以方便的通读代码，并根据实际情况进行二次开发。</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel alert">
      <h4>  <i class='icon icon-rocket'> </i> 性能良好</h4>
      <p>zentaoPHP框架在实现过程中，十分重视性能。在保证功能的前提下面，尽可能的提升程序执行效率。</p>
      </div>
   </div>
    <div class="col-md-3">
      <div class="panel alert">
      <h4>  <i class='icon icon-list'> </i> 结构清晰</h4>
      <p>zentaoPHP框架对模块目录结构的划分清晰合理，方便代码的组织和维护。程序结构也简单明了，便于入手。</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel alert">
      <h4>  <i class='icon icon-thumbs-o-up'> </i> 开发友好</h4>
      <p>zentaoPHP框架对开发者比较友好，比如完全中性化的命名，配置对象化，相对路径包含，深度扩展机制。</p>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
