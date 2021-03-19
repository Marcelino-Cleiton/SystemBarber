
<div id="main-content">
     <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
				<div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-calendar"></i> Calendário</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div id="calendar" class="has-toolbar"><?php echo $this->calendar->generate($ano,$mes,$data); ?></div>

                        </div>
  				</div>
  			</div>
  		</div>
  	</div>
</div>  				