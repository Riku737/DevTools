document.addEventListener("DOMContentLoaded", function () {
    // Get references to the select elements
    const categorySelect = document.getElementById("categorySelect");
    const subcategorySelect = document.getElementById("subcategorySelect");

    // If categorySelect is not found, exit early
    if (!categorySelect) return;

    // Listen for changes on the category select
    categorySelect.addEventListener("change", function () {
        const categoryId = this.value;

        // Reset subcategory select
        subcategorySelect.innerHTML =
            '<option selected disabled value="">Select a subcategory</option>';

        // If no category is selected, do nothing further
        if (!categoryId) return;

        // Fetch subcategories for the selected category
        fetch(
            "/api/categories/" +
                encodeURIComponent(categoryId) +
                "/subcategories"
        )
            .then((response) => {
                if (!response.ok)
                    throw new Error("Network response was not ok");
                return response.json();
            })
            .then((data) => {
                data.forEach(function (sc) {
                    const opt = document.createElement("option");
                    opt.value = sc.id;
                    opt.textContent = sc.name;
                    subcategorySelect.appendChild(opt);
                });
            })
            .catch((err) => console.error("Failed to load subcategories", err));
    });
});
