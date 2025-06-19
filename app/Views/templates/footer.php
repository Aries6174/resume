</div>
    <script>
        const ctx = document.getElementById('expertiseChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Front-end', 'Back-end', 'Documentation'],
                datasets: [{
                    data: [90, 50, 40],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',   // blue for Frontend
                        'rgba(255, 99, 132, 0.8)',   // pink for Backend
                        'rgba(255, 206, 86, 0.8)'    // yellow for Documentation
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#e0e0e0'
                        }
                    }
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
