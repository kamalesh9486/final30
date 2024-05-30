function openNewPage() {
    var grievanceSelect = document.getElementById("grievance");
    var selectedGrievance = grievanceSelect.options[grievanceSelect.selectedIndex].value;
    
    if (selectedGrievance === "Course Completion Certificte") {
        window.open("course_completion_certificate.php", "_blank");
    }
}