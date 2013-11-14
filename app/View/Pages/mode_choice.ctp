<div data-role="content">
    <ul data-role="listview" data-inset="true" class="data-split-icon"
        style="width: 30%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
        <li>
            <?php
            echo $this->Html->link($this->Html->image('yinsh.jpg').'<h2>Regular</h2>',
                array('controller' => 'pages', 'action' => 'display', 'yinsh_regular'),
                array('escape' => false));
            ?>
        <li>
            <?php
            echo $this->Html->link($this->Html->image('yinsh.jpg').'<h2>Blitz</h2>',
                array('controller' => 'pages', 'action' => 'display', 'yinsh'),
                array('escape' => false));
            ?>

    </ul>
</div>

<div data-role="footer" class="ui-bar"
     style="position: absolute; bottom: 0; width: 100%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
    <div data-role="controlgroup" data-type="horizontal">
        <a href="#">About</a>
    </div>
</div>