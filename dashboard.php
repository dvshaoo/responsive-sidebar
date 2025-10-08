
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | E-Commerce</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Lexend:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <link rel="stylesheet" href="https://unpkg.com/lucide@latest/dist/lucide.css">
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#601008',
                        secondary: '#F88820',
                        accent: '#ffce0a',
                        sidebar: {
                            DEFAULT: 'hsl(0 0% 98%)',
                            foreground: 'hsl(240 5.3% 26.1%)',
                            primary: 'hsl(240 5.9% 10%)',
                            'primary-foreground': 'hsl(0 0% 98%)',
                            accent: 'hsl(240 4.8% 95.9%)',
                            'accent-foreground': 'hsl(240 5.9% 10%)',
                            border: 'hsl(220 13% 91%)',
                            ring: 'hsl(217.2 91.2% 59.8%)',
                        },
                    },
                    fontFamily: {
                        anta: ['Anta', 'sans-serif'],
                        lexend: ['Lexend', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
</head>
<body class="bg-zinc-50">
    <div class="sidebar-wrapper">
        <!-- Include Sidebar  dituy nga part ket icacall mo ni resuable nga sidebar instead nga agipan ka code ti sidebar per page kasla tay edit customer view customer -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Mobile Header (visible only on mobile) -->
            <div class="mobile-header md:hidden">
                <div class="logo-container">
                    <div class="logo-image">EC</div>
                    <span class="logo-text">E-Commerce</span>
                </div>
                <button class="mobile-profile-btn">
                    <i data-lucide="user" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>

            <!-- Page Content -->
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">E-Commerce Dashboard</h1>
                <p class="text-gray-600">Welcome to your e-commerce admin panel. Manage products, orders, customers, and more from this central dashboard.</p>
                
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Total Products</h3>
                        <p class="text-3xl font-bold text-primary">1,234</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Total Orders</h3>
                        <p class="text-3xl font-bold text-secondary">856</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Customers</h3>
                        <p class="text-3xl font-bold text-accent">2,341</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Revenue</h3>
                        <p class="text-3xl font-bold text-green-600">$45,678</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Initialize Lucide icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    </script>
</body>
</html>
