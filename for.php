<?php

echo "Welcome to Rocket Launch Game!\n";
echo "Starting countdown...\n";

for ($i = 10; $i > 0; $i--) {
    echo "$i\n";
    sleep(1); // Wait for 1 second (optional for realism)
}

echo "🚀 Launch successful!\n";
