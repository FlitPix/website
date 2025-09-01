<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
$title = 'Archipelago Multiworld Rules and Info - ' . $site_title;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
        <meta name="og:title" content="<?php echo $title; ?>">
    </head>
    
    <body>
        <div id="wrap">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'); ?>

            <div id="main">
                <h1>Archipelago Multiworld Rules and Info</h1>
                <p>If you're on this page, you've probably joined an Archipelago multiworld hosted by me; welcome, and thank you for participating!</p>
                <p>If this is your first time participating in an Archipelago multiworld, make sure you've read the <a href="https://archipelago.gg/tutorial/Archipelago/setup/en">Getting Started guide</a>, as well as the setup guide for your game. I won't be able to help with games I'm not familiar with.</p>
                <p>New players are welcome! However, keep in mind that <a href="https://archipelago.miraheze.org/wiki/Category:Custom_games">custom games</a> are almost always allowed.</p>
                <p>By joining my multiworld(s), you agree to the rules as they're listed at the time of posting. Failure to follow these rules may result in your YAML(s) being excluded or slot(s) being released, without warning. In egregious situations, you may be permanently banned from future multiworlds of mine. There is no public banlist; I will just silently ignore your YAML. There are no temporary bans. Bans cannot be appealed.</p>
                <p>Note that anything on this page can be overridden by rules in the original post, so please read that after this.</p>

                <a id="info"></a><h2>Info</h2>
                <ul>
                    <li>All multiworlds are generated on Linux using the latest stable Archipelago tar.gz release, and the latest APWorld at the time of submission for any custom games used.</li>
                    <li>
                        These are the host.yaml settings for <strong>syncs</strong>:
                        <ul>
                            <li><b>!getitem:</b> Disabled</li>
                            <li><b>Hint Points Per Check:</b> 1</li>
                            <li><b>Hint Cost:</b> 10% (10 total hints per player)</li>
                            <li><b>Release:</b> Enabled on goal</li>
                            <li><b>Collect:</b> Disabled</li>
                            <li><b>Remaining:</b> Disabled</li>
                            <li><b>Spoiler Level:</b> 1 (no playthroughs or paths)</li>
                            <li><b>Enabled Plando Options:</b> Bosses, Connections, Texts, Items</li>
                            <li><b>TUNIC Limit Grass Rando:</b> Enabled</li>
                        </ul>
                    </li>
                    <li>
                        These are the host.yaml settings for <strong>asyncs</strong>:
                        <ul>
                            <li><b>!getitem:</b> Disabled</li>
                            <li><b>Hint Points Per Check:</b> 1</li>
                            <li><b>Hint Cost:</b> 100% for first three days, 10% afterwards (10 total hints per player)</li>
                            <li><b>Release:</b> Auto on goal</li>
                            <li><b>Collect:</b> Auto on goal</li>
                            <li><b>Remaining:</b> Disabled</li>
                            <li><b>Spoiler Level:</b> 1 (no playthroughs or paths)</li>
                            <li><b>Enabled Plando Options:</b> Bosses, Connections, Texts, Items</li>
                            <li><b>TUNIC Limit Grass Rando:</b> Enabled</li>
                        </ul>
                    </li>
                </ul>

                <a id="global"></a><h2>"Global" Rules</h2>
                <p>These rules take effect regardless of whether you're participating in a sync or an async.</p>
                <ul>
                    <li>Be courteous to others. Treat others how you'd want them to treat you.</li>
                    <li>If this is on the Archipelago Discord and this is your first multiworld, you should probably read the <a href="https://docs.google.com/document/d/1GZBS5WrjhezuuXVuBFSCb1Re7rRp-Gdjoh4k2k7u-Yk">guide</a> (Google Docs link) so you know what you're doing.
                    <li>You may play <a href="https://archipelago.miraheze.org/wiki/Category:Core-verified_games">core-verified games</a>, <a href="https://archipelago.miraheze.org/wiki/Category:Custom_games">custom games</a>, or <a href="https://archipelago.miraheze.org/wiki/Manual_game">manuals</a>.</li>
                    <li>
                        I always generate locally. <strong>Games <em>not</em> listed here that require the <em>host</em> (me) to have a ROM <em>cannot be played</em>.</strong> Please don't offer to cover for me. If I notice you submit a game I know I can't generate, I'll let you know, but <em>you're still expected to check this yourself before joining; if I get a ROM pop-up prompt while generating, I'll just remove your YAML without saying anything.</em>
                        <ul>
                            <li>The Legend of Zelda (NES)</li>
                            <li>The Legend of Zelda: Ocarina of Time</li>
                        </ul>
                    </li>
                    <li>
                        Non-manual games <em>must</em> have a git repository or public website where I can download the APWorld. Games whose APWorlds are only available in a Discord server, including the Archipelago Discord server, are <strong>banned</strong> (with maybe a handful of forgotten exceptions). Please encourage applicable APWorld developers to properly publish their APWorlds so more people can play them.
                        <ul><li>Linking to APWorld repos is appreciated but not necessary :)</li></ul>
                    </li>
                    <li>You <em>must</em> test your YAMLs before joining. Any YAMLs that throw errors on generation will be removed without warning.</li>
                    <li>
                        I will <em>not</em> help with:
                        <ul>
                            <li>Finding ROMs or BIOS files.</li>
                            <li>The entire process of setting up your game or emulator. (I may help with specific steps, but don't expect a walkthrough; please follow the guide(s) provided by the game's maintainer(s).)</li>
                        </ul>
                    </li>
                    <li>Any bugs you encounter should be reported to the developer if they aren't already known. I can provide additional information as the host if requested. If you make an issue tracker, please send it to me so I can pitch in with more information and/or follow the issue.</li>
                    <li>
                        Game-specific rules:
                        <ul>
                            <li><b>APBingo:</b> Only one board per person. Board size must not exceed 5x5. If you bring an APBingo, you must bring another different game, which must not have the same requirement.</li>
                            <li><b>Autopelago ("rat game"):</b> Only one Autopelago per person. If you bring an Autopelago, you must bring another different game, which must not have the same requirement.</li>
                            <li><b>ChecksFinder:</b> If you bring a ChecksFinder, you must bring another different game, which must not have the same requirement.</li>
                            <li><b>Clique:</b> Up to three Cliques per person. <em>In syncs, you are committing to your Clique(s); you must stay until the button(s) is/are pressed, and only you can press your button(s).</em></li>
                            <li><b>Hint games (Sudoku, HintMachine):</b> These are <strong>banned</strong> in syncs. In asyncs, you can only use them on your own slot, and only while you're BK'ed.</li>
                            <li><b>Old-School Runescape:</b> This game is <strong>banned</strong> in syncs.</li>
                            <li><b>Stardew Valley:</b> This game is <strong>banned</strong> in syncs.</li>
                            <li><b>Xenoblade Chronicles X:</b> This game is <strong>banned</strong> in syncs.</li>
                        </ul>
                    </li>
                    <li><strong>Any restrictions on the platform this multiworld is hosted on will always take precedence over, and be enforced in addition to, rules on this page.</strong> In other words, if you were brought to this page from the Archipelago Discord server, all of its rules apply.</li>
                </ul>

                <a id="sync"></a><h2>Sync Rules</h2>
                <p>These rules only apply to syncs. They don't apply to asyncs.</p>
                <ul>
                    <li>See the <a href="#live-session">live session rules</a> above, since they apply to syncs.</li>
                    <li>The post that brought you to this page should list a starting time. That is the <em>time at which the multiworld will be generated.</em> This means you must join VC and post your YAML <em>prior</em> to the starting time. Any YAMLs posted <em>after</em> the starting time will be ignored, unless I say otherwise.</li>
                    <li>You may play up to three games in a single sync.</li>
                    <li>You <strong>must</strong> join VC. You don't have to use a microphone; if you don't, you must use the Archipelago text chat during the multiworld. Do not use Discord text channels, they likely won't be monitored.</li>
                    <li>
                        To accommodate for those who don't want to or can't use a microphone, you <strong>MUST</strong> monitor the Archipelago text feed.
                        <ul>
                            <li>If your game doesn't have a good built-in text feed, you can open the text client on another monitor, or use a web client like <a href="https://drawesome4333.github.io/ap-tracker/">this one</a> on another device like your phone.</li>
                            <li>Risk of Rain 2 players will benefit greatly from <a href="https://thunderstore.io/c/riskofrain2/p/DestroyedClone/ChatboxEdit/">this mod</a>.</li>
                        </ul>
                    </li>
                    <li>By submitting a YAML, you're committing to all games included in it. You may not pass off games to other people. You must stay until all of your games are completed, unless something comes up and you absolutely must leave, or you discover you aren't having fun and want out, in which case I will release your slots. Please don't consistently do this in every sync.</li>
                    <li>Coordinate with others when releasing your game - ask, "Is everyone ready for release?". Some games, like Risk of Rain 2, tend to lag during large releases; other games, like Dark Souls or The Messenger, may have difficult sections that can be disrupted with traps and other items. This can cause cascading issues, especially when deathlink is enabled.</li>
                    <li>When someone is about to communicate a hint in VC, make sure they can be heard.</li>
                    <li>Minimize play-by-plays. They aren't outright banned (I'm guilty of it sometimes), but if someone asks you to stop, stop.</li>
                </ul>

                <a id="async"></a><h2>Async Rules</h2>
                <p>These rules only apply to asyncs. They don't apply to syncs.</p>
                <ul>
                    <li>The post that brought you to this page should list a starting time. That is the <em>time at which the multiworld will be generated.</em> This means you must submit your YAML <em>prior</em> to the starting time. Any YAMLs posted <em>after</em> the starting time will be ignored, unless I say otherwise.</li>
                    <li>
                        I use <a href="https://cheesetrackers.theincrediblewheelofchee.se/">Cheese Trackers</a> to make tracking asyncs easier. When the multiworld is created, a Cheese Tracker link will be provided. You are <em>required</em> to claim your slot(s) by clicking the "Claim" button under the Availability column, and expected to keep your status updated as you play.
                        <ul>
                            <li>The app is somewhat built around Discord authentication. If you don't (want to) use Discord, you can go to the Settings at the top and input a username instead.</li>
                            <li>If you're BK'ed (stuck), you must change your status accordingly to "Soft BK" or "BK" using the dropdown under the Status column (the Help page explains what these mean). You must also change it to "Unblocked" when you aren't BK'ed, and "Go mode" when you can goal on your own.</li>
                            <li><b>Optional:</b> You can mark hints accordingly as critical, progression, quality of life, or trash. This helps others know what to prioritize. This can be done on top of Archipelago's built-in hint priorities. The host may also change hint priorities depending on what's needed.</li>
                        </ul>
                    </li>
                    <li>You may play as many games as you want in a single async, but please limit yourself to what you know you can handle.</li>
                    <li><strong>Communication is key.</strong> Inform the host (me) immediately if you have any technical issues, cannot play for extended periods of time, or want to drop out.</li>
                    <li>
                        Ping guidelines (Discord only):
                        <ul>
                            <li>On Cheese Tracker, the ping policy is forced to Sparingly.</li>
                            <li>When sending a hint, you may ping the recipient <strong>once</strong>. "Reminder" pings aren't allowed.</li>
                            <li>When finding a hinted item, you may ping the person receiving the item <strong>once</strong> to let them know you've found it.</li>
                            <li>If someone pings or DMs you outside of this policy, and you're annoyed by it, notify me privately. Don't start a fight over it.</li>
                        </ul>
                    </li>
                    <li>
                        Sometimes, I'll schedule live playtime sessions. These are optional but are a good way to make significant progress on your slot(s). If you decide to join these...
                        <ul>
                            <li>When someone is about to communicate a hint in VC, make sure they can be heard.</li>
                            <li>Minimize play-by-plays. They aren't outright banned (I'm guilty of it sometimes), but if someone asks you to stop, stop.</li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
