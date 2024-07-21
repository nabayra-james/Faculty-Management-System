<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Record</title>
    <!-- [Meta] -->
    @include('admin-partials.admin-header')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>

    @include('admin-partials.admin-sidebar')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        {{-- <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.admin-records') }}"
                                            class="fw-bold">Records</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.records.records_1') }}">1st
                                            Semester 21-22</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.test-administration.test-administration') }}">Test
                                            Administration</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.test-administration.bsit') }}">BSIT</a></li>
                                </ul>
                            </ul>
                        </div> --}}
                        <div class="pc-content">
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-8">
                                            <ul class="breadcrumb mb-0">
                                                <li class="breadcrumb-item"><a href="{{ route('admin.admin-records') }}"
                                                    class="fw-bold">Records</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('admin.records.records_1') }}">1st
                                                    Semester 21-22</a></li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('admin.test-administration.test-administration') }}">Test
                                                    Administration</a></li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('admin.test-administration.bsit') }}">BSIT</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 text-end mt-0">
                                            <div class="dropdown-container">
                                                <i class="fas fa-ellipsis-h dropdown-trigger" onclick="toggleDropdown()"></i>
                                                <div class="dropdown-menu" id="dropdownMenu">
                                                    <a href="#" class="dropdown-item">Upload</a>
                                                    <a href="#" class="dropdown-item">Pull Records</a>
                                                    <a href="#" class="dropdown-item">Push Records</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- [ dropdowns ] start -->
                                    <div class="row mb-3">
                                        <div class="col-md-2 mt-2">
                                            <div class="dropdown">
                                                <select class="form-select">
                                                    <option selected>Types</option>
                                                    <option value="option1">Option 1</option>
                                                    <option value="option2">Option 2</option>
                                                    <option value="option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-2">
                                            <div class="dropdown">
                                                <select class="form-select">
                                                    <option selected>People</option>
                                                    <option value="option1">Option 1</option>
                                                    <option value="option2">Option 2</option>
                                                    <option value="option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-2">
                                            <div class="dropdown">
                                                <select class="form-select">
                                                    <option selected>Modified</option>
                                                    <option value="option1">Option 1</option>
                                                    <option value="option2">Option 2</option>
                                                    <option value="option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- [ dropdowns ] end -->
                                </div>
                            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Owner</th>
                                        <th>Date Uploaded</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Shiloh Eugenio</td>
                                        <td>Approved</td>
                                        <td>Data 1</td>
                                        <td>Data 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
    </div>
    <!-- [ Main Content ] end -->
    @include('admin-partials.admin-footer')

</body>
<!-- [Body] end -->

</html>
