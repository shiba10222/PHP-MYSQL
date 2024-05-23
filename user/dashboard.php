<!doctype html>
<html lang="en">
    <head>
        <title>dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            :root {
                --aside-width:280px;
                --header-height: 72px;
            }
            /* Company Name 用 logo 寬度撐開 */
            .logo {
                width: var(--aside-width);
            }
            .aside-left {
                padding-top: var(--header-height);
                width: var(--aside-width);
                top: 0;
                overflow: auto;
            }
            .main-content {
                margin: var(--header-height) 0 0 var(--aside-width);
            }
        </style>
        <?php include("../css.php") ?>

    </head>

    <body>
        <!-- 用 justify-content-between 把 Hi Admin 和 Logout 擠到右邊 -->
        <header class="main-header fixed-top bg-dark d-flex shadow justify-content-between align-items-center">
            <a href="" class="text-decoration-none text-white bg-black p-3 logo">
                Company Name
            </a>
            <div class="text-white me-3">
                Hi, Admin
                <a href="" class="btn btn-dark"><i class="bi bi-door-closed me-2"></i>Logout</a>
            </div>
        </header>
        <div>
            <aside class="aside-left position-fixed bg-light border-end vh-100">
                <ul class="list-unstyled">
                    <li>
                        <a href="" class="d-block px-3 py-2  text-decoration-none">
                            <i class="bi bi-house-fill me-2"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2 text-decoration-none">
                            <i class="bi bi-file-earmark me-2"></i>Orders
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2 text-decoration-none">
                            <i class="bi bi-cart3 me-2"></i>Product
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2 text-decoration-none">
                            <i class="bi bi-people me-2"></i>Customers
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2 text-decoration-none">
                            <i class="bi bi-graph-up me-2"></i>Report
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2 text-decoration-none">
                            <i class="bi bi-puzzle me-2"></i>Integrations
                        </a>
                    </li>
                </ul>
                <div class="aside-title d-flex justify-content-between">
                    <div class="px-3 text-secondary">SAVE REPORTS</div>
                    <a href="" class="link-secondary me-3" role="button">
                        <i class="bi bi-plus-circle"></i>
                    </a>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <a href="" class="d-block px-3 py-2  text-decoration-none">
                            <i class="bi bi-file-earmark-text me-2"></i>Current Month
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2  text-decoration-none">
                            <i class="bi bi-file-earmark-text me-2"></i>Last quarter
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2  text-decoration-none">
                            <i class="bi bi-file-earmark-text me-2"></i>Social engagement
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2  text-decoration-none">
                            <i class="bi bi-file-earmark-text me-2"></i>Year-end sale
                        </a>
                    </li>
                </ul>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <a href="" class="d-block px-3 py-2  text-decoration-none">
                            <i class="bi bi-gear-wide-connected me-2"></i>Setting
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-block px-3 py-2  text-decoration-none">
                            <i class="bi bi-door-closed me-2"></i>Sign out
                        </a>
                    </li>
                </ul>
            </aside>
            <main class="main-content p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h2">Dashboard</h1>
                    <div>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary">
                                share
                            </button>
                            <button class="btn btn-outline-secondary">
                                Export
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-calendar3 me-2"></i>This week
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h2>Section title</h2>
                <div class="table-responsive small">
                    <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                        </tr>
                        <tr>
                        <td>1,002</td>
                        <td>placeholder</td>
                        <td>irrelevant</td>
                        <td>visual</td>
                        <td>layout</td>
                        </tr>
                        <tr>
                        <td>1,003</td>
                        <td>data</td>
                        <td>rich</td>
                        <td>dashboard</td>
                        <td>tabular</td>
                        </tr>
                        <tr>
                        <td>1,003</td>
                        <td>information</td>
                        <td>placeholder</td>
                        <td>illustrative</td>
                        <td>data</td>
                        </tr>
                        <tr>
                        <td>1,004</td>
                        <td>text</td>
                        <td>random</td>
                        <td>layout</td>
                        <td>dashboard</td>
                        </tr>
                        <tr>
                        <td>1,005</td>
                        <td>dashboard</td>
                        <td>irrelevant</td>
                        <td>text</td>
                        <td>placeholder</td>
                        </tr>
                        <tr>
                        <td>1,006</td>
                        <td>dashboard</td>
                        <td>illustrative</td>
                        <td>rich</td>
                        <td>data</td>
                        </tr>
                        <tr>
                        <td>1,007</td>
                        <td>placeholder</td>
                        <td>tabular</td>
                        <td>information</td>
                        <td>irrelevant</td>
                        </tr>
                        <tr>
                        <td>1,008</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                        </tr>
                        <tr>
                        <td>1,009</td>
                        <td>placeholder</td>
                        <td>irrelevant</td>
                        <td>visual</td>
                        <td>layout</td>
                        </tr>
                        <tr>
                        <td>1,010</td>
                        <td>data</td>
                        <td>rich</td>
                        <td>dashboard</td>
                        <td>tabular</td>
                        </tr>
                        <tr>
                        <td>1,011</td>
                        <td>information</td>
                        <td>placeholder</td>
                        <td>illustrative</td>
                        <td>data</td>
                        </tr>
                        <tr>
                        <td>1,012</td>
                        <td>text</td>
                        <td>placeholder</td>
                        <td>layout</td>
                        <td>dashboard</td>
                        </tr>
                        <tr>
                        <td>1,013</td>
                        <td>dashboard</td>
                        <td>irrelevant</td>
                        <td>text</td>
                        <td>visual</td>
                        </tr>
                        <tr>
                        <td>1,014</td>
                        <td>dashboard</td>
                        <td>illustrative</td>
                        <td>rich</td>
                        <td>data</td>
                        </tr>
                        <tr>
                        <td>1,015</td>
                        <td>random</td>
                        <td>tabular</td>
                        <td>information</td>
                        <td>text</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </main>
            
    </body>
</html>
