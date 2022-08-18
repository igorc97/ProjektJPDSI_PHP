{if $msgs->isError()}
<section style="padding-top: 1em; padding-bottom: 1em">
    <div class="messages err">
        <ol>
            {foreach $msgs->getErrors() as $err}
                {strip}
                    <li>{$err}</li>
                {/strip}
            {/foreach}
        </ol>
    </div>
    </section>
{/if}
{if $msgs->isInfo()}
<section style="padding-top: 1em; padding-bottom: 1em">
    <div class="messages inf bottom-margin">
        <ol>
            {foreach $msgs->getInfos() as $inf}
                {strip}
                    <li>{$inf}</li>
                {/strip}
            {/foreach}
        </ol>
    </div>
    </section>
{/if}
