document.getElementById('missionForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const data = {
        name: document.getElementById('mission_name').value,
        dest: document.getElementById('destination').value,
        date: document.getElementById('mission_date').value
    };

    fetch('backend/submit.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    }).then(res => res.json()).then(() => location.reload());
});

// Load data
fetch('backend/get_missions.php')
    .then(res => res.json())
    .then(data => {
        const table = document.getElementById('missionData');
        data.forEach(m => {
            table.innerHTML += `<tr><td>${m.mission_name}</td><td>${m.destination}</td><td>${m.mission_date}</td></tr>`;
        });
    });