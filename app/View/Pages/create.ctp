<div data-role="content">
    <form id="create" action="../wait_opponent" method="POST">
        <div data-role="fieldcontain">
            <label for="title"><?php echo __('Game Title'); ?></label>
            <input name="title" id="title" placeholder="<?php echo __('Game Title'); ?>" value="<?php echo __('Game Title'); ?>" type="text" required />
            <input name="game" id="game" type="hidden" value="<?php echo $this->params['named']['game']; ?>" />
        </div>
        <div id="color" data-role="fieldcontain">
            <fieldset data-role="controlgroup" data-type="horizontal">
                <legend><?php echo __('Color'); ?></legend>
                <input id="radio1" name="color" value="black" type="radio" checked />
                <label for="radio1"><?php echo __('Black'); ?></label>
                <input id="radio2" name="color" value="white" type="radio" />
                <label for="radio2"><?php echo __('White'); ?></label>
            </fieldset>
        </div>
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup" data-type="horizontal">
                <legend><?php echo __('Mode'); ?></legend>
                <input id="radio3" name="mode" value="regular" type="radio" checked />
                <label for="radio3"><?php echo __('Regular'); ?></label>
                <input id="radio4" name="mode" value="blitz" type="radio" />
                <label for="radio4"><?php echo __('Blitz'); ?></label>
            </fieldset>
        </div>
        <div id="type" data-role="fieldcontain">
            <fieldset data-role="controlgroup" data-type="horizontal">
                <legend><?php echo __('Type'); ?></legend>
                <input id="radio5" name="type" value="realtime" type="radio" checked />
                <label for="radio5"><?php echo __('Real time'); ?></label>
                <input id="radio6" name="type" value="delayed" type="radio" />
                <label for="radio6"><?php echo __('Delayed'); ?></label>
                <input id="radio7" name="type" value="ia" type="radio" />
                <label for="radio7"><?php echo __('Versus IA'); ?></label>
            </fieldset>
        </div>
        <input id="submit" type="submit" value="Create">
    </form>
</div>

<div data-role="footer" class="ui-bar"
     style="position: absolute; bottom: 0; width: 100%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
    <div data-role="controlgroup" data-type="horizontal">
        <a href="#">About</a>
    </div>
</div>