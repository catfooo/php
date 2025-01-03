<div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/<?php echo $item["bildnamn"]?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $item["produktnamn"]?></h5>
                                    <p class="card-text"><?php echo $item["beskrivning"]?></p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="form.php?id=<?php echo $item["id"]?>"><?php echo $item["pris"]?> <span>maskrosor</span></a></div>
                            </div>
                        </div> <!-- card -->
                    </div> <!-- col -->