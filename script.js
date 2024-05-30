document.getElementById('toggleButton').addEventListener('click', function() {
    var dashboard = document.getElementById('dashboard');
    var toggleButton = document.getElementById('toggleButton');
    dashboard.classList.toggle('open');
    toggleButton.classList.toggle('hidden');
  });
  
  document.getElementById('button1').addEventListener('click', function() {
    window.location.href = 'newpage.php'; 
  });
  