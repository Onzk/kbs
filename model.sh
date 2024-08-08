#!/bin/bash
allThreads=("Expert" "Faq" "Webinary" "Question" "Post" "Config" "Candidate" "Education" "Experience" "Document" "Language" "Entreprise" "Position" "ContractsTemplate" "Contract" "Chat");

for t in ${allThreads[@]}; do
  php artisan make:model $t -m;
done
