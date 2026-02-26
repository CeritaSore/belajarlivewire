<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="jumbotron bg-gray-100 h-[90vh]">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-full">
            <div class="jumbotron-text flex flex-col justify-start py-6 px-11 h-full overflow-scroll">
                <h1 class="text-4xl font-semibold " id="about">Tentang saya</h1>
                <p class="text-lg mt-5">Fresh graduate dari sebuah kampus swasta program studi teknik informatika.
                    Tertarik pada pengembangan web terutama web developer dan juga devops yang melibatkan konsep CI/CD.
                    Aktif belajar, Senang mencoba dan suka eksplorasi. </p>
                <div class="educations ">
                    <h4 class="text-2xl font-semibold mt-4">Pendidikan</h4>
                    <ul>
                        <li>
                            <h1>Universitas A</h1>
                            <small>2017 - 2020</small>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dicta tenetur neque
                                nihil non deleniti, cumque voluptates expedita repellat reprehenderit, impedit
                                explicabo, nisi soluta. Tempore dolorum quasi quo ex, perspiciatis quisquam porro
                                ducimus facere facilis dicta eos optio fuga quae.
                            </p>
                        </li>
                        <li>
                            <h1>SMA 1</h1>
                            <small>2017 - 2020</small>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dicta tenetur neque
                                nihil non deleniti, cumque voluptates expedita repellat reprehenderit, impedit
                                explicabo, nisi soluta. Tempore dolorum quasi quo ex, perspiciatis quisquam porro
                                ducimus facere facilis dicta eos optio fuga quae.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="workEXP">
                    <h4 class="text-2xl font-semibold mt-4">Pengalaman Kerja</h4>
                    <ul>
                        <li>
                            <h1>PT sinar abadi</h1>
                            <small>2017 - 2020</small>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dicta tenetur neque
                                nihil non deleniti, cumque voluptates expedita repellat reprehenderit, impedit
                                explicabo, nisi soluta. Tempore dolorum quasi quo ex, perspiciatis quisquam porro
                                ducimus facere facilis dicta eos optio fuga quae.
                            </p>
                        </li>
                        <li>
                            <h1>PT maju mundur</h1>
                            <small>2017 - 2020</small>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dicta tenetur neque
                                nihil non deleniti, cumque voluptates expedita repellat reprehenderit, impedit
                                explicabo, nisi soluta. Tempore dolorum quasi quo ex, perspiciatis quisquam porro
                                ducimus facere facilis dicta eos optio fuga quae.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="jumbotron-img m-auto w-full h-full flex justify-center items-center bg-slate-700">
                <span class="w-150 h-130 block overflow-hidden rounded-lg mx-auto border-5 border-slate-700 ">
                    <img src="/picture.jpg" alt="" class="w-full h-full object-cover overflow-hidden">
                </span>
            </div>
        </div>
    </div>
</div>
