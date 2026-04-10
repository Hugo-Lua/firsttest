<?php

namespace Database\Seeders;

use App\Models\Games;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        Games::create([
            'id' => '1',
            'title' => 'Balatro',
            'tags' => 'Roguelike,Deckbuilder,Card Game',
            'creator' => 'LocalThunk',
            'genre' => 'Roguelike Deckbuilder',
            'email' => 'support@playbalatro.com',
            'short_description' => 'A deceptively addictive poker-based roguelike where you build decks, stack multipliers, and chase impossible scores. Its not really about poker — its about breaking the rules in the most satisfying way possible.',
            'description' => "Balatro took the gaming world by storm in 2024, becoming one of the most talked-about indie releases in years. Created entirely by a solo anonymous developer known as LocalThunk, Balatro disguises itself as a poker game but is really a deeply strategic roguelike deckbuilder. You progress through a series of blinds, using a standard deck of cards to play poker hands — but the real game is in the Joker cards, consumables, and planet cards that warp, amplify, and utterly transform how every hand scores. Want to play nothing but flushes? There are builds for that. Want to score billions of points with a single pair of Twos? Also very much possible. The genius of Balatro is how it layers complexity gradually, starting simple and escalating into an almost incomprehensible cascade of multipliers and triggers that somehow always makes sense in the moment. Each run feels different thanks to the rotating shop and randomised Joker availability, and the game never punishes you for experimenting. Losing a run rarely feels frustrating — it feels like a lesson. The minimalist aesthetic, pulsing lo-fi soundtrack, and satisfying card animations all contribute to a game that is genuinely hard to put down. It won numerous awards and sold millions of copies, proving that one developer with a great idea can still shake the entire industry."
        ]);
        Games::create([
            'id' => '2',
            'title' => 'Hades II',
            'tags' => 'Roguelike,Action,Mythology',
            'creator' => 'Supergiant Games',
            'genre' => 'Action Roguelike',
            'email' => 'contact@supergiantgames.com',
            'short_description' => 'Supergiant returns with a follow-up that is bigger, deeper, and more beautiful than the original. Play as Melinoe, daughter of Hades, cutting through Greek mythology with brutal combat and a story that unfolds across every single run.',
            'description' => "Hades II launched into Early Access in 2024 and immediately dominated conversation across the gaming world. Supergiant Games returned with their signature formula — tight action combat, rich narrative delivered through repeated runs, and an extraordinary volume of voiced dialogue — and expanded on it in nearly every direction imaginable. You play as Melinoe, a witch trained in secret to defeat the Titan Chronos, who has overthrown her father and taken control of the Underworld. The combat expands significantly on the original, introducing a wider variety of weapons, a crafting and gathering system, and more complex Boon interactions drawn from an expanded pantheon of Olympian gods. Supergiant has always excelled at making roguelikes feel narrative-driven, and Hades II is no exception — characters react to your choices, your failures, and your progress in ways that make each run feel like it contributes to a larger, breathing story. The art direction is stunning, pushing the studio signature hand-painted aesthetic into elaborate new environments spanning both the surface world and the depths of the Underworld. Even in Early Access, the game arrived remarkably polished and content-rich, a testament to Supergiant reputation for craft and quality. For fans of the original and newcomers alike, Hades II is one of the most compelling action games available today, and its full release promises to be something truly special.",
        ]);
        Games::create([
            'id' => '3',
            'title' => 'Cybersquare Madness',
            'tags' => 'Cyberpunk,Strategy,PvZ',
            'creator' => 'Hugo Norlin',
            'genre' => 'Tower Defence',
            'email' => 'hugo.norlin@icloud.com',
            'short_description' => 'A fast-paced cyberpunk tower defence where you place and synergise squares to repel a robot invasion. With strategic depth, boss fights, an endless mode, and a gloriously chaotic premise — this is cubic perfection at its finest.',
            'description' => "Cybersquare Madness is an indie tower defence game with a cyberpunk twist, developed by solo creator Hugo Norlin. Set in the high-stakes world of the Cybersquare Arena — the biggest competitive event on the planet — your glory run is abruptly interrupted when a mysterious robot overlord launches an all-out invasion of Earth. With hundreds of millions of spectators watching and your pet fishs life on the line, you must synergise with your squares and hold the line against wave after wave of mechanical enemies. The core gameplay revolves around placing and repositioning squares — modular defensive towers — across the arena grid. Unlike traditional tower defence games, Cybersquare Madness leans into flexibility: squares can be repositioned on the fly, hurled directly into enemies, or swapped out entirely as your strategy evolves. As you progress through the games levels, new square types are unlocked, each bringing unique abilities and synergies that open up increasingly creative defensive configurations. Finding the right combination for each encounter is deeply satisfying, and the nonlinear structure means no two playthroughs need feel the same. Boss fights punctuate the campaign, escalating the challenge and demanding a sharper tactical approach than the standard waves. For those who conquer the main campaign, an endless mode offers the ultimate test — a relentless gauntlet to discover just how long your loadout can hold against an ever-intensifying robot horde. Wrapped in pixel art aesthetics with a retro-futurist cyberpunk palette, Cybersquare Madness balances accessibility with genuine strategic depth. Its a game built for players who like to think fast, adapt faster, and occasionally throw a square directly at a robot for the sheer satisfaction of it."
        ]);
        Games::create([
            'id' => '4',
            'title' => 'Blue Prince',
            'tags' => 'Puzzle,Mystery,Roguelike ',
            'creator' => 'Dogubomb',
            'genre' => 'Puzzle Roguelite',
            'email' => 'hello@dogubomb.com',
            'short_description' => 'A puzzle roguelite set in a manor that rebuilds itself from scratch every single day. You choose which rooms materialise as you open doors — and your accumulated knowledge is the only thing that carries between runs.',
            'description' => "Blue Prince arrived in 2025 as one of the most original and celebrated indie releases of the year. Developed by Dogubomb, it places you in the role of a young heir exploring Mount Holly manor in search of the elusive Room 46. The central mechanic is deceptively simple: the manor is completely blank at the start of every day, and rooms only materialise when you choose to enter them, selecting from three random blueprints each time you open a door. Some rooms are useful corridors or puzzle chambers, others contain valuable items and keys, and some are dead ends that can collapse an entire run in an instant. The structure blends roguelite design with puzzle logic and the slow unravelling of a mystery novel, woven together with remarkable elegance. The brilliance of Blue Prince is that it rewards knowledge above all else. Early runs will feel short and directionless, but every attempt teaches you something new — a room type you had not seen before, a hidden mechanic, a pattern in how blueprints are distributed. That accumulated understanding becomes your greatest tool, making later runs feel increasingly deliberate and deeply satisfying. The manor itself conceals secrets far beyond the simple goal of finding Room 46, with cryptic notes, recurring symbols, and a slowly expanding backstory that rewards the most curious and patient players. Blue Prince is a rare puzzle game that feels genuinely novel — and one that will occupy your thoughts long after you have stepped away from the screen."
        ]);
        Games::create([
            'id' => '5',
            'title' => 'Pizza Tower',
            'tags' => 'Platformer,Fast-paced,Retro',
            'creator' => 'Tour De Pizza (McPig)',
            'genre' => '2D Action Platformer',
            'email' => 'contact@pizzatower.com',
            'short_description' => 'A wildly energetic platformer built entirely around speed, momentum, and chaos. Sprint, wall-jump, and combo your way through a tower of absurd levels as Peppino Spaghetti, the most anxious chef in gaming history.',
            'description' => "Pizza Tower released in 2023 after years of development by solo developer McPig under the Tour De Pizza banner, and it immediately became one of the most beloved platformers in recent memory. Inspired heavily by the Wario Land series, it follows Peppino Spaghetti — a perpetually panicking Italian chef — as he storms up a bizarre tower to destroy a giant laser threatening his restaurant. What sets Pizza Tower apart from everything else in the genre is its extraordinary sense of momentum. Peppino moves fast, and every level is designed entirely around building and maintaining that speed. Dashing, wall-jumping, grabbing enemies, and chaining combos together creates a rhythm that feels almost musical when everything clicks into place. Levels are packed with secrets, alternate routes, and collectables that reward thorough exploration without ever forcing you to slow down. The visual style is a love letter to the rubber-hose animation of classic cartoons, with thick outlines, expressive squash-and-stretch movement, and wildly animated characters that give the game a uniquely chaotic personality. The soundtrack — a collection of frenetic, genre-blending tracks — matches the on-screen madness perfectly at every turn. Pizza Tower also features a unique scoring system built around the escape sequence at the end of each level, where you must sprint back to the start before a countdown expires, turning every stage into a satisfying two-act structure. It is joyful, relentless, and packed with personality from the very first second to the last."
        ]);
        Games::create([
            'id' => '6',
            'title' => 'Clair Obscur: Expedition 33',
            'tags' => 'RPG,Turn-based,Story-rich',
            'creator' => 'Sandfall Interactive',
            'genre' => 'Turn-based RPG',
            'email' => 'support@sandfall.co',
            'short_description' => 'A breathtaking French indie RPG blending classic turn-based combat with real-time parry and dodge mechanics. Set in a hauntingly beautiful world inspired by Belle Epoque France, it rivals any big-budget release in scope and ambition.',
            'description' => "Clair Obscur: Expedition 33 is arguably the most ambitious indie RPG in years, developed by Sandfall Interactive — a small French studio — and released in 2025 to widespread critical acclaim. Set in a world where a mysterious figure called the Paintress annually erases all people of a certain age from existence, you lead Expedition 33, a group of survivors determined to reach and destroy her before the next stroke of her brush claims them all. The game draws clear inspiration from classic JRPGs like Final Fantasy and Chrono Trigger, featuring a party-based turn-based combat system, but layers in a real-time element that demands active participation. Perfectly timed parries and dodges can negate enemy attacks entirely, while mistimed inputs can be devastating, creating a sense of tension and engagement rarely found in the genre. This fusion of active and strategic gameplay makes every encounter feel consistently rewarding rather than passive. The production values are extraordinary for an indie release — environments are lush and painterly, the musical score is sweeping and deeply emotional, and the voice cast includes recognisable performers who deliver genuinely affecting performances throughout. The story itself is mature, melancholic, and full of surprising turns, exploring themes of loss, sacrifice, and what it means to fight for a future you may not live to see. Clair Obscur stands as a testament to what small teams can achieve when vision, craft, and passion align in exactly the right way."
        ]);
        Games::create([
            'id' => '7',
            'title' => 'Animal Well',
            'tags' => 'Metroidvania,Atmospheric,Puzzle',
            'creator' => 'Shared Memory (Billy Basso)',
            'genre' => 'Metroidvania',
            'email' => 'support@animalwell.net',
            'short_description' => 'A dense, atmospheric Metroidvania set inside a strange underground world filled with glowing creatures and layered secrets. Some of those secrets were designed to take the entire global player community months to uncover together.',
            'description' => "Animal Well is one of the most quietly extraordinary games released in recent years. Created entirely by solo developer Billy Basso over six years and published by Bigmode in 2024, it drops you wordlessly into a subterranean world filled with glowing fauna, strange creatures, and an atmosphere of gentle, persistent dread. There are no tutorials, no quest markers, and no explicit goals — only curiosity and a growing collection of unusual tools that slowly expand what you are capable of exploring. The Metroidvania structure is familiar on the surface, but Animal Well layered approach to secrets is unlike anything else in the genre. The game contains four distinct tiers of hidden content, the outermost of which were designed to take the entire global player community months to uncover collectively through shared investigation. Individual players will encounter rooms, items, and puzzles that seem completely inexplicable on first encounter, only to suddenly make perfect sense hours later when a newly acquired ability reframes everything seen before. The pixel art is lush and genuinely evocative, the sound design is exceptional, and the creature designs occupy a fascinating space between beautiful and deeply unsettling. Animal Well is a game that respects player intelligence, rewards patience, and trusts players to find their own path through a world that reveals itself slowly and entirely on its own terms. It is a profoundly meditative experience that lingers long after the credits roll, and a remarkable achievement for a single developer working alone over many years."
        ]);
        Games::create([
            'id' => '8',
            'title' => 'Shadows of Doubt',
            'tags' => 'Detective,Immersive Sim,Procedural',
            'creator' => 'ColePowered Games',
            'genre' => 'Detective Sim',
            'email' => 'support@colepowered.com',
            'short_description' => 'A fully procedural detective game set in a noir retro-futurist city where every citizen has a life, a schedule, and a secret. Every murder is unique, every investigation is different, and every solution belongs entirely to you.',
            'description' => "Shadows of Doubt is one of the most ambitious and innovative indie games of the past several years, developed by ColePowered Games and released in full in 2024. Set in a sprawling, procedurally generated city in an alternate 1979, you play as a private detective tasked with solving murders — but unlike most detective games, no two cases are ever alike. Every citizen in the city has a name, a job, a home, a daily routine, and a web of relationships with other citizens. When a murder occurs, it is committed by one of these simulated people, for reasons rooted entirely in their simulated life and circumstances. Your job is to gather evidence through any means available — breaking into apartments, hacking computer terminals, interviewing witnesses, reviewing security footage — and piece together who did it and why. The systemic depth is staggering. Clues can be followed in any order, red herrings emerge naturally from the simulation, and the open-ended investigative tools mean no two players will solve the same case in the same way. The retro-futurist aesthetic — all chunky monitors, neon signage, and brutalist architecture — gives the city a distinctive personality that complements the noir atmosphere without feeling derivative. Shadows of Doubt is a genuinely novel experience that rewards methodical thinking and genuine curiosity, and it stands as one of the most creative and ambitious uses of procedural generation in the history of the medium."
        ]);
        Games::create([
            'id' => '9',
            'title' => 'Venba',
            'tags' => 'Narrative,Cooking,Emotional',
            'creator' => 'Visai Games',
            'genre' => 'Puzzle Cooking Sim',
            'email' => 'hello@visaigames.com',
            'short_description' => 'A deeply moving narrative game about a Tamil immigrant family in Canada, told through the act of recovering lost recipes. Short, beautiful, and emotionally devastating in the best possible way',
            'description' => "Venba is a small but extraordinarily powerful game released in 2023 by Visai Games, a studio rooted in the Tamil-Canadian experience. You play as Venba, a woman who has emigrated from India to Canada with her husband and young son. When she discovers her mother's old cookbook — water-damaged and partially illegible — she sets about reconstructing the lost recipes, using context clues, intuition, and memory to fill in the blanks. The cooking mechanics are simple but clever, turning the act of following a damaged recipe into a tactile puzzle that mirrors the broader theme of recovering cultural identity across generations. The story spans decades, following Venba's family through the joys and fractures of immigrant life — the tension between preserving heritage and assimilating, the distance that grows between parents and children born into a different world, and the way food carries memory when language and tradition begin to fade. The art style is warm and expressive, the music is rooted in classical Carnatic composition, and the writing is honest and restrained in a way that makes its emotional moments hit remarkably hard. Venba is a short experience — completable in two to three hours — but it is one of the most meaningful and human things you can play. It is a game that understands what the medium is uniquely capable of, and uses that capability with great care."
        ]);
        Games::create([
            'id' => '10',
            'title' => 'The Plucky Squire',
            'tags' => 'Action-Adventure,Puzzle,Storybook',
            'creator' => 'All Possible Futures',
            'genre' => 'Action-Adventure Puzzle',
            'email' => 'hello@allpossiblefutures.com',
            'short_description' => 'A charming action-adventure where a storybook hero can leap off the page into the real 3D world. Inventive, joyful, and packed with creative puzzles that play with the boundary between story and reality.',
            'description' => "The Plucky Squire, developed by All Possible Futures and published by Devolver Digital in 2024, is one of the most inventive and delightful games of recent years. You play as Jot, the hero of a children's storybook, who discovers he can jump out of the pages of his book and into the real world — a cluttered bedroom desk rendered in full 3D. This core mechanic drives the entire game, with puzzles built around the interplay between the flat 2D storybook world and the three-dimensional environment outside it. Rotating the book to reveal hidden paths, using objects from the desk to affect the story within the pages, and shifting between artistic styles creates a constant sense of playful invention. The game's visual identity is exceptional — the storybook sections are rendered in a warm, illustrated style reminiscent of classic children's picture books, while the real-world sections have a wonderfully tactile, miniature quality. The story itself is sweet and earnest, following Jot as he battles the villain Humgrump, who has discovered he can rewrite the book to make himself its hero. The writing is funny and self-aware without being cynical, maintaining a tone of genuine warmth throughout. The Plucky Squire is a game that feels designed to spark joy in players of all ages, and it succeeds completely — a celebration of imagination, storytelling, and the magic of a well-loved book."
        ]);
    }
}
