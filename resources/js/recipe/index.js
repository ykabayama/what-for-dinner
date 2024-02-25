

const recipeSortElement = document.querySelector("#recipe-sort");

recipeSortElement.addEventListener("change", (event) => {
    document.forms["search-form"].submit();
});