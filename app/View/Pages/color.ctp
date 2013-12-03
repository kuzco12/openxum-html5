<div data-role="content">
    <ul data-role="listview" data-inset="true" class="data-split-icon"
        style="width: 90%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
        <li>
            <?php
            echo $this->Html->link($this->Html->image('black.png') . '<h2>' . __('Black') . '</h2>',
                array('controller' => 'pages', 'action' => 'display', 'wait_opponent', 'game' => $this->params['named']['game'], 'color' => 'black'),
                array('escape' => false));
            ?>
        <li>
            <?php
            echo $this->Html->link($this->Html->image('white.png') . '<h2>' . __('White') . '</h2>',
                array('controller' => 'pages', 'action' => 'display', 'wait_opponent', 'game' => $this->params['named']['game'], 'color' => 'white'),
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