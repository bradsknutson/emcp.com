<?php
    // $server is defined in server.php
    // $currentwl is defined in functions.php
?>
        <div class="lp-links">
            <div class="ninesixty">
                <?php

                $elem_4 = '<div class="link-blocks" >
                    <img src="'. $server. 'lib/images/links-games.png" alt="Games" />
                    <h3>Games</h3>
                    <p>Practice the skills your students are learning in class through fun and engaging games.</p>
                </div>';
                $elem_3 = '<div class="link-blocks" >
                    <img src="'. $server. 'lib/images/links-readers.png" alt="Readers" />
                    <h3>Readers</h3>
                    <p>Develop your learner\'s grammar and vocabulary while building their ability to comprehend increasingly difficult pieces of literature.</p>
                </div>';
                $elem_2 = '<div class="link-blocks" >
                    <img src="'. $server. 'lib/images/links-activity-books.png" alt="Activity Books" />
                    <h3>Activity Books</h3>
                    <p>Improve your learner\'s reading, writing, speaking, or listening skills with fun and engaging activity books.</p>
                </div>';
                $elem_5 = '<div class="link-blocks" >
                    <img src="'. $server. 'lib/images/links-classroom-fun.png" alt="Classroom Fun" />
                    <h3>Classroom Fun</h3>
                    <p>Bring more variety into your daily routine with DVD programs, maps, posters, flashcards, and more!</p>
                </div>';

                echo hide_sub_elem( $hide_elem_4, $elem_4 );
                echo hide_sub_elem( $hide_elem_3, $elem_3 );
                echo hide_sub_elem( $hide_elem_2, $elem_2 );
                echo hide_sub_elem( $hide_elem_5, $elem_5 );

                ?>
                <div class="clearfix"></div>
            </div>
        </div>
