<?php $this->assign('title', 'New Canonical Link');?>
<div class="row-fluid">
    <div class="span9">
        <?php echo $this->element('Canonical/form'); ?>
    </div>
    <div class="span3">
        <div class="widget no-margin">
            <div class="widget-header">
                <div class="title">
                    <?php echo _('Actions'); ?>
                </div>
            </div>
            <div class="widget-body">
                <ul>
                    <li>
                        <?php
                        echo $this->Html->link(
                            _('List Canonical Links'),
                            array('action' => 'index')
                        );
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>