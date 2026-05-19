function cube(s) {
    return s * s * s;
}

function cylinder(r, h) {
    return Math.PI * r * r * h;
}

function sphere(r) {
    return (4/3) * Math.PI * r * r * r;
}

// Data
const data = [
    {
        values: "s = 5",
        formula: "V = s³",
        answer: cube(5)
    },
    {
        values: "r = 3, h = 7",
        formula: "V = πr²h",
        answer: cylinder(3, 7).toFixed(2)
    },
    {
        values: "r = 4",
        formula: "V = 4/3 πr³",
        answer: sphere(4).toFixed(2)
    }
];

// Display output
const table = document.getElementById("output");

data.forEach(item => {
    const row = `
        <tr>
            <td>${item.values}</td>
            <td>${item.formula}</td>
            <td>${item.answer}</td>
        </tr>
    `;
    table.innerHTML += row;
});