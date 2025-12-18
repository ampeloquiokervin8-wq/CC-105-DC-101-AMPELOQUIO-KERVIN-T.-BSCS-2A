// Confirm Delete
function confirmDelete() {
    return confirm("Are you sure you want to delete this student?");
}

// Validate Form Inputs
function validateForm() {
    let fields = document.querySelectorAll("input");
    for (let i = 0; i < fields.length; i++) {
        if (fields[i].value === "") {
            alert("Please fill out all fields.");
            return false;
        }
    }
    return true;
}