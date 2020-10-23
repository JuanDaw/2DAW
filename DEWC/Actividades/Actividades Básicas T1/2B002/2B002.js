var musicians = parseInt(prompt("Introduce un número: "));

switch (musicians) {
    case 0:
        alert("not a group");
        break;
    case 1:
        alert("solo");
        break;
    case 2:
        alert("duet");
        break;
    case 3:
        alert("trio");
        break;
    case 4:
        alert("quartet");
        break;
    default:
        alert("this is a large group");
        break;
}