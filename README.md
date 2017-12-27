# automod
This is an automated combat system built for a roleplaying site I admin for.

The general purpose is to provide a system that rolls the dice, and logs the results.
Additionally the tool provides the ability to note and write what the dice rolls are for.

This is just version 0.1 though.
The goal is for the tool to provide an automated system where the players can interact with the system and choose each of their actions. Without the need for an external non-participant to write and note details. As the combat system is turn-based and requires each participant to state their actions each player needs the ability to log in, note their actions, and only when all participants has noted their actions, can the next round commence.

Currently the tool is in early beta, needling lots of modifications and interaction between the different files and the actual dice rolls being logged in the database.

This tool is intended to be placed in the page extension for phpbb. Meaning it'll have certain access enabled. So only specific usergroups are able to see and use the tool. The trigger for the access I'm considering trying to implement in the tool itself so only administrators are able to delete currently exisitng mods.
