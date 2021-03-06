<?php $this->Html->script('Sb2plugin.menu-search.js', ['block' => 'script']); ?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse collapse" id="sidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input id="sideMenuSearchField" type="text" class="form-control" placeholder="Buscar..."/>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'home']) ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'flot']) ?>">Flot Charts</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'morris']) ?>">Morris.js Charts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'tables']) ?>"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'forms']) ?>"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'panels-wells']) ?>">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'buttons']) ?>">Buttons</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'notifications']) ?>">Notifications</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'typography']) ?>">Typography</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'icons']) ?>"> Icons</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'grid']) ?>">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Examples<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'blank']) ?>">Blank Page</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['plugin' => 'Sb2plugin', 'controller' => 'Examples', 'action' => 'login']) ?>">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->