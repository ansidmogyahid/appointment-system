<div
    x-data="{
        chart: null,
        init() {
            const ctx = this.$refs.canvas.getContext('2d');
            this.chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @js($sales['labels']),
                    datasets: [{
                        label: 'Sales (PHP)',
                        data: @js($sales['data']),
                        borderColor: 'blue',
                        backgroundColor: 'rgba(0, 0, 255, 0.1)',
                        tension: 0.3,
                        pointRadius: 4,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            title: {
                                display: true,
                                text: 'Sales (PHP)'
                            },
                            beginAtZero: false
                        }
                    }
                }
            });
        }
    }"
    x-init="init()"
    class="relative w-full p-4 flex-1 border rounded shadow"
>

    <canvas x-ref="canvas" class="w-full h-64"></canvas>
</div>