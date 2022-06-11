/*window.addEventListener(
    "keydown",
    function (e) {
        if (
            e.keyIdentifier == "U+000A" ||
            e.keyIdentifier == "Enter" ||
            e.keyCode == 13
        ) {
            if (e.target.type == "text") {
                e.preventDefault();
                return false;
            }
        }
    },
    true
);*/

const ul = document.querySelector("ul"),
    input = ul.querySelector("input");

let tags = [];

function createTag() {
    ul.querySelectorAll("li").forEach((li) => li.remove());
    tags.slice()
        .reverse()
        .forEach((tag) => {
            let liTag = `<li class="flex items-center bg-green-200 border border-green-500 list-none my-1 mx-0.5 rounded-full p-1.5 text-sm"> ${tag} <svg class="w-5 h-5 text-green-800" onclick="remove(this,'${tag}')" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></li>`;
            ul.insertAdjacentHTML("afterbegin", liTag);
        });
}
function remove(element, tag) {
    let index = tags.indexOf(tag);
    tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
    element.parentElement.remove();
    document.getElementById("skills").setAttribute("value", tags);
}

function addTag(e) {
    if (e.key == "Enter") {
        let tag = e.target.value.replace(/\s+/g, " ");

        if (tag.length > 1 && !tags.includes(tag)) {
            tag.split(",").forEach((tag) => {
                tags.push(tag);
                createTag();
                document.getElementById("skills").setAttribute("value", tags);
            });
        }

        e.target.value = "";
    }
}

input.addEventListener("keyup", addTag);
