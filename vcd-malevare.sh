#===================#
#    wp-includes    #
#===================#

################# SEARCH FILES ###################
find . -type f \( -name "wp-vcd.php" -o -name "class.wp.php" -o -name "wp-cd.php" -o -name "wp-feed.php" -o -name "wp-tmp.php" \);
################# REMOVE FILES ###################
rm -i wp-vcd.php class.wp.php wp-cd.php wp-feed.php wp-tmp.php


#==================#
#    wp-content    #
#==================#

################# SEARCH FILES ###################
find . -type f \( -name "class.plugin-modules.php" -o -name "class.theme-modules.php" \);
################# REMOVE FILES ###################
rm -i -r $link
################# FIND MALEVAREE #################
grep -R --include=*.php "class.plugin-modules.php"
grep -R --include=*.php "class.theme-modules.php"