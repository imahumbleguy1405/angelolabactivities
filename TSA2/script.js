// Array of Phantom Thieves (using .webp images)
const members = [
    {
        name: "Ann Takamaki",
        image: "images/ann.webp",
        description: "Codename: Panther",
        facts: "Ann is a strong-willed member known for her compassion and fire-based Persona abilities."
    },
    {
        name: "Futaba Sakura",
        image: "images/futaba.webp",
        description: "Codename: Oracle",
        facts: "Futaba is the team's navigator and hacker who provides support during battles."
    },
    {
        name: "Goro Akechi",
        image: "images/akechi.webp",
        description: "Codename: Crow",
        facts: "Akechi is a detective with a complicated role in the Phantom Thieves' story."
    },
    {
        name: "Haru Okumura",
        image: "images/haru.webp",
        description: "Codename: Noir",
        facts: "Haru is kind and elegant but has powerful combat skills using psychic attacks."
    },
    {
        name: "Makoto Niijima",
        image: "images/makoto.webp",
        description: "Codename: Queen",
        facts: "Makoto is intelligent and strategic, acting as one of the group’s leaders."
    },
    {
        name: "Morgana",
        image: "images/morgana.webp",
        description: "Codename: Mona",
        facts: "Morgana is a mysterious being who guides the group in the Metaverse."
    },
    {
        name: "Ren Amamiya",
        image: "images/joker.webp",
        description: "Codename: Joker",
        facts: "Ren is the leader of the Phantom Thieves with the ability to use multiple Personas."
    },
    {
        name: "Ryuji Sakamoto",
        image: "images/ryuji.webp",
        description: "Codename: Skull",
        facts: "Ryuji is energetic and loyal, specializing in physical and lightning attacks."
    },
    {
        name: "Yusuke Kitagawa",
        image: "images/yusuke.webp",
        description: "Codename: Fox",
        facts: "Yusuke is an eccentric artist who uses ice-based abilities."
    },
    {
        name: "Kasumi Yoshizawa",
        image: "images/kasumi.webp",
        description: "Codename: Violet",
        facts: "Kasumi is a talented gymnast who joins later and has strong agility in combat."
    }
];

// Sort alphabetically
members.sort((a, b) => a.name.localeCompare(b.name));

// Display in table
const table = document.getElementById("tableData");

members.forEach(member => {
    const row = `
        <tr>
            <td><img src="${member.image}" alt="${member.name}"></td>
            <td>${member.name}</td>
            <td>${member.description}</td>
            <td>${member.facts}</td>
        </tr>
    `;
    table.innerHTML += row;
});