        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right"><?php if(isset($config)){ foreach($config as $row){ echo $row->app_name; }}?> <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2018 Copyright.
            </div>
        </footer>
        <div>
            <!-- Javascript Libs -->
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/jquery.min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/bootstrap.min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/Chart.min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/bootstrap-switch.min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/jquery.matchHeight-min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/jquery.dataTables.min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/dataTables.bootstrap.min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/select2.full.min.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/ace/ace.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/ace/mode-html.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/lib/js/ace/theme-github.js')?>"></script>
            <!-- Javascript -->
            <script type="text/javascript" src="<?php echo base_url('dist/js/app.js')?>"></script>
            <script type="text/javascript" src="<?php echo base_url('dist/js/index.js')?>"></script>
			
</body>

</html>