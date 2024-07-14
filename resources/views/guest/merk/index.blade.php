<x-guest-layout>
    <div class="px-8 py-14 mx-auto md:px-12 lg:px-32 max-w-6xl">
        {{-- Nama Halaman --}}
        <div>
            <h1 class="font-bold text-2xl mb-3 text-green-600">
                Daftar Merek
            </h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-400 dark:hover:text-white">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-green-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Daftar
                                Merk</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="grid grid-cols-3 gap-6">
            <div class="...">
                {{-- kategori --}}
                <h1 class="font-semibold py-4 border-b border-b-gray-100">Kategori</h1>
                <div class="space-y-3 mt-3">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="flex justify-between items-center">
                            <div class="flex gap-x-2 items-center w-full">
                                <svg style="width: 26px; height: 26px;" viewBox="0 0 400 400" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#8f8f8f">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M74 211.658C99.0457 142.251 155.836 87.1314 226.717 108.765C276.177 123.861 255.428 151.992 274.648 170.486C285.492 178.829 314.933 167.631 322.548 178.047C329.28 187.259 324.416 204.065 322.548 215.097C315.179 258.597 265.313 265 223.065 265"
                                            stroke="#adadad" stroke-opacity="0.9" stroke-width="16"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M325 194C321.518 187.392 313.572 181.214 304 176" stroke="#adadad"
                                            stroke-opacity="0.9" stroke-width="16" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M132.242 181.22C129.728 194.908 90.9731 288.143 131.095 296.086C205.608 306.73 196.665 221.971 196.665 169"
                                            stroke="#adadad" stroke-opacity="0.9" stroke-width="16"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M234 168V173" stroke="#adadad" stroke-opacity="0.9" stroke-width="16"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <span class="text-sm">Kategori {{ $i }}</span>
                            </div>
                            <span class="text-sm">(10)</span>
                        </div>
                    @endfor
                </div>
                <br>
                {{-- filter harga --}}
                <h1 class="font-semibold py-4 border-b border-b-gray-100">Filter Harga</h1>
                <div class="relative mb-6">
                    <label for="labels-range-input" class="sr-only">Labels range</label>
                    <input id="labels-range-input" type="range" value="1000" min="100" max="1500"
                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min ($100)</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max ($1500)</span>
                </div>
                {{-- filter by tags --}}
                <h1 class="font-semibold py-4 border-b border-b-gray-100">Filter By Tag</h1>
                <div class="flex gap-2 items-center flex-wrap">
                    @for ($l = 0; $l < 20; $l++)
                        <a href="#"
                            class="hover:bg-gray-200 text-gray-500 text-xs font-light me-2 px-2.5 py-0.5 rounded-full border border-gray-400 inline-flex items-center justify-center">Tag
                            {{ $l }}</a>
                    @endfor
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center gap-x-2">
                        <svg style="width: 18px; height: 18px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M6.75 3C3.88235 3 3 3.88235 3 6.75C3 9.61765 3.88235 10.5 6.75 10.5C9.61765 10.5 10.5 9.61765 10.5 6.75C10.5 3.88235 9.61765 3 6.75 3Z"
                                    stroke="#16a34a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M6.75 13.5C3.88235 13.5 3 14.3824 3 17.25C3 20.1176 3.88235 21 6.75 21C9.61765 21 10.5 20.1176 10.5 17.25C10.5 14.3824 9.61765 13.5 6.75 13.5Z"
                                    stroke="#16a34a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M17.25 13.5C14.3824 13.5 13.5 14.3824 13.5 17.25C13.5 20.1176 14.3824 21 17.25 21C20.1176 21 21 20.1176 21 17.25C21 14.3824 20.1176 13.5 17.25 13.5Z"
                                    stroke="#16a34a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M17.25 3C14.3824 3 13.5 3.88235 13.5 6.75C13.5 9.61765 14.3824 10.5 17.25 10.5C20.1176 10.5 21 9.61765 21 6.75C21 3.88235 20.1176 3 17.25 3Z"
                                    stroke="#16a34a" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                        <span id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-sm flex items-center text-gray-500" type="button">
                            Pengurutan Standar
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1" d="m1 1 4 4 4-4" />
                            </svg>
                        </span>
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="text-sm">Menampilkan 10-20 dari 100 hasil</span>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    @for ($j = 1; $j <= 9; $j++)
                        <div>
                            <img class="h-40 border-2 border-gray-100 p-2 rounded-md"
                                src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYSFRgVFRUYFRgYGBkaGBgZGhgYGhgZGBkaGhoaGBkcIS4lHB4rHxgYJjgmKzAxNTU1GiQ7QDszQC40NTEBDAwMEA8QHhISHjQkJSQ0MTU0ODc0MTQxMTQ2PzQ4NDQxNjY0NDQ1NjY0NjE/NDQxNDQ0NTQ0NjY0NDE0NDQ/P//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAwYEBQcCAQj/xABMEAACAQIDBAYFBwkFBgcAAAABAgADEQQSIQUxQVEGImFxgZEHEzJSoRRCYpKxwdEjJDNygpOz0vAWQ1NjwhWDoqOy4SU0NURUc9P/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQMCBAX/xAAtEQEBAAEDBAEACgIDAAAAAAAAAQIDETEEEiFBURMUYXGBkaGxwfDR8TJCUv/aAAwDAQACEQMRAD8A7NERAREQERED5MHam0qeFpmpVbKoIG4kkncABvMzpUvSRTLYO4BOWohPYLML/GJyl4ek6fYQ8ag70/Az2OneD95/3b/hOUUKTObKCxsTYAk6a6ATMOzag4L4PTO7uad9sc91dN/tzg/fb92/4T0Om2D/AMRv3dT+WcoKEGxGo5a/EaSRUPKO2HdXVP7aYP32+o/4T5/bbB++37t/wnMCp5SJlPKO2HdXUv7c4L33/dv+EDp1gv8AEYf7up/LOTsp5GeCvZHbE7q68Om+BP8AfH93V/kkg6Y4I/3/APwVf5ZyjZtFHcLVconFgQOI4kEbr+Uy0w1DMw9Y1g2hBQ3Wy8yNblvKO2L3V04dLcH/AI4+rU/lmTgdvYeu2SnVVmtcLqCe4MBfwnKjhaeuV777XamOGl+vzt8ey/3YL5cVhz/moPrMF++Tti9ztMRE5dEREBERAREQEREBERAREQERED5Kv6Q7/IahBI61O9iRcFwCDzGu6WiVr0grfAVew0j/AM1JZyl4cnw1b1bBsqvbg4up7xMv5fe/5OkL8k3dwvp/2mtSSqP60mjJK9Qk30F+A0HgJ6VzzMjUSRRKJC55yF2POSMJEwgeGY8/jPOc8/jPrSO39aSCdKje8fMyQO3vHzMiQf1pPYECdaje8fMzK2TWZMRRZTY+sp69hYBh4gkeMwwJ9pvlZW91gfIg/dKrusT5PsxakREBERAREQEREBERAREQERED5K/06F8DX7k+FRTLBK906NsDW7k/iJLEvDjqGSqZCokqiaMkimSrIlEnQQDCRMJORI2WUY7CRkSdhPGWQfVkqzygkyLA+2kdQaHuMntI3Eo7hh3zIrc1B8xJZg7GbNQonnSpnzQTOmLYiIgIiICIiAiIgIiICIiAiIgfJWvSG1tn1z/9f8VJZZVvSQbbOr/7r41qcsS8OTqJKqyKmb2kwM0ZPaiTIJEkmUyg0jYyUDMbLqeQ1Pwnv/Z9Y7qNU91Nz9ggYbTxMx9l4j/49b91U/lmO+FqJ7dN0/WRl+0QPqiToshpMDMlIH20gqTLmI4lHYOjbXwmHP8Ak0/ggE2k0vRF82Don6Nvqkr903UxrWEREikREBERAREQEREBERAREQPkqnpNNtnVv1qP8enLXKl6Tz/4fU7XpfxUP3SzlLw5PhQzZVUFmI0VQSTpwA1MtGzehuKqWLBaK83PW8EW58DaWroZhkTDUWRFVnpKXYAXZrC5Y7zreWZBLcnMxVjAdBKCa1HeoeQsi+Qu3xm/wuwcNStloU7jiVzH6zXM2CCS2k3rraPCqFFgAB2aT1PhM1FXpBRXEjCkt6xhpppexYAnnYEyWyOsccsuI3M+SvbN6SrWxFahkZTRzEsdxCnKbj5u+45iZOw9vUsYjPTuAhscwynUXB7iJJZXeWjnjLbOP54bGvgqdT26aP8ArKrfaJqsT0Twr7qeQ80JX/h9n4TeA3nqXdlsouO6DNvo1QfouLH6y/hKptTZFfD3NSmyj3vaT6w0HjOyTHxY0nUyqXGNL0Ea+Cpjk1Qf8xz98scwtnUVRSFVVGYmygKLm1zYTNnNWEREKREQEREBERAREQEREBERA+SnelI/mDdtSn/1X+6XGUv0qtbA99Wn/qP3SzlLwk6Ej8zoH6B/62tLLTle6GIVwtJDvVSp7wTLELAXYgAbydAPGKsTrPciWqtswYEWve4tbneeUxSEAhlIJsCGBBPIHn2SLtWi6Y7G+VURd2T1RL9UZrhVN7C463I8DK5W2s+JWli8LRQPTY06j1RTLAAKV65I6pDG5GoJnQWqi+UkXIJC3FyBoTblrKjtLo7TxNfMa6imTlVAUazr7aIhGUHS5JDNcndacZT3Hs6fVxk2z4m+38+GCdrVFxGIdcXhmVkb1KGont2XICNLW6wNzrfyxK9f1eETD16IRsU5u1EUxudcrMF6rMSRoDqAZZz0Pw1tc+7fn0+qer8Jh7E2TRwrvVXEqaKjUZlChiQLuB1Qd1ioXfxnFl9tpraW28nG3rbfbhYdi4D5PRSkGLZFtc/hwHIcrTYSKtXVFLsyqoFyxIAA5knhMevtSils1RBdC46w1QWuw5jUazXxHzr3ZW3ndnSOuLqZirtSicwFRCVUOwDAkKRcMRytrefcPj6dZSabBxlBuOTLdT4iN0uNnpJgj1T3zKmNhFsDMmVCIiAiIgIiICIiAiIgIiICIiAlM9JlPNhqS+9iqQ8w9/hLnKv04phqdEMbD5QCTw0o1t/4xEr50Vb8mv6z9g1J3ee+YnpBJOGQAXBrpmW9sws3VJ5XAmFhtunDFUTD1q49rOgLLrpYkA66bu0T7iukprLkqbNrsoZWsytbMpuD7POcZ2WWbvb0+jnjljqSbyeeZ/lXKDdXI16OHbFhatIMSaVl3MSL5TrrzXsm1xWyMM+Kp4fCt1XVmqZGzBGVSabg3Nmv28eF5mPtsMXZtlVSaoAqEoxzBd2bqa2nrZe1/UE+q2XUp5t7BXubagE5Cd/hMpJ/ZXuzzz2uUm18+N5t998+moTHPTR6zM1XF1C1CnpcoiWDMAOJ4duvvSPYlQU/UMxsExjgs3VsClPVr+z2yxUNo5Hzps1lbrdYLUB6zXbX1V9Tr4+EjqYnOLPsq4Z85DK/ttcMzfktTYC5F94l2+393H0u8s7eftnxZtI2PTXEZ8KpRs1JqiCqyHN+TuQ1iO200W26Wz1pP8nZfWGloEZipUMpObeA3frNrhNq1UUU02cUSx6oLhesdRb1XG5JkVCs6hlGykUOCGAvZxfc35PUcbGXLz/pjpW6e0+LvzPP3tPR2swwdbC1QykU81EupUsikHLrvtwI4d0wqyuh9S+oTDVzTb3qbpnXyIYeFuEteIx+IqaPs5WABAzkNowIIsV0BsAe+eMRjMYx/wDTkbq5QWKeywGZNT7PC24zmz7f0rbHVst2xk33vM548KuquDUrprkoUM6+9Tq0QreVlPhfhOgdFrfIqJ0/RDXnYWE0qYvaAvl2fSFwFPWQXUCwB62oA4T2MdtQLYYOioAsBmWwHLR9J1jtLv5/KuNfu1cZje2bbf8AacSLdQ3eAk0r/Ryvi2zfKaSUwAuTKb335r9Y9nnLBNpd3zc8e3Lbx+D7ERDkiIgIiICIiAiIgIiICIiAlZ6bAeqpk3sKw3WP93UF7HSwveWaV7pn+gU6aVFOouPZYa+cDC6MFbDKbjPyYa2X3ifhpLCg1lb6NVLgGyjr7gwflvI0B7LmWVd8G7JUT1aeUkeIrKilidB9u4AdpOkCUzR7S6T4egSpbOw+bTsxHebgDuveVvpBtKviGK07rT7GAzfHd/Wkr/8As2p7o8xMp1Gj7yju6Wr6xq2VOmjm2XCmzeyS5N9CdwXkCd/Az7R6YVLXbDrltmuKmXq6a6jX2l0+kOcrdKhWUhlRA4AAe9zYAKNCSvsi2746ycJVtbKgGQpYFhZTk5HX2F335G4sA+tdP/6n5n0Gt8Vc9n9KKFUhSTTY8HsAe5hp52m9E5Ouzn45fM/hN/sPalTDEI93p9huU7V4kfR8u2fWdC3bHKH0OtOcavUjrjqmfabhgCpBBFwRuIPERX9kzZwiwm7wEyZjYTd4CZMBERAREQEREBERAREQEREBERATQdMP0A0v110vbeGH37uO7jN/NF0uH5uTvs6cL/Otu5awNTsMkadYWIsGCi31dJY1OvjKxsQgXAy6EaC4t+yfZlkDQMym0rfSPEsXy3so0A5sR1m7rEKO9+yZm0dtJhmpq9/yjEX0sgA1Zr8BdfOV/bOJz1SbWsqi3eoYjvuxni67UuOldvfh6elwmWpN/Xl4egRe/wA1sp146/gZ7bCsrZSLNYt4AE/YD4iZNTaKsxDCy+tVgAgUlQG0bS5JuBrzM8naKsQzLlYCoNLsCHVuJPBmPgZ8e6Oj8/32+hNXW2/4/wB9I6mCZRe6n2bgNcrmF1zDheefkzFlUEEncdQN5BvcX0Knyk9bHKyqALWKZtB1wqgdY8SCDbhYyJ8SCVuWJU3ZhZWbSwPYVsLc9d2+c3T0ZfF+Fmett5n6CYMm+VlZQRdgTYAgtc6aWCm433g4RspYEGyK9uJDZt3cFJMyG2gpuLEq2UMTlDMFVgWNtzXKn9mQjG2AAG4INdxy5gQRyIa3nOrjofKTLXvputhVirNQY3y6qftHxv5zdV/ZMpuGxl8QrgWzOBbfo3V++WupUvpPr9Bqd+Fnxdp9z5/Vadwzlvub/i94Pd4D75lTFwW7wEyp7nmIiICIiAiIgIiICIiAiIgIiICaTpX/AOXa9vap77gfpF4jd38N83c03Slb4Zx2py41EHHS+u474Gi2UDYkk620JBA37iBc37ZufWXYjl26DfNDsj59lCjq65SpJ1vcceGvbN4RqTbx84Rz30gYol1ZnIRAQEBC3vvzEmxB0FrHQWmk2dtXE1Ey07ONLJezqhBAyncEtpYcjpLf0h2UuJDq1tfZNrkHXceUw8Iq0AqZVUKLHKC7nfqqoLgX8JxlN+WkvwmwSLkAOZGRBmSwJ6iDQajWw075h/7Yoc6p7qaf/pJ0NQ1XdaZF16mcqoLAWUEDcD225abxUnBU2N1IJFjoQRvHYZjOi0MrbZ5+9peq1cZJKsi7ZF+qjkdoAPkCftmfT2kh3061+xV1t4yvUalT5zq9xYZqxNu0BXHx5TIqV3t8y7adV2Y63sQM5/q0v1Dp56/Vz9c1/lvcNj0qEhKdRrAsesgCqNSzG1lHaZNiHUDqvTudAvrc7XuRaypa+h3Ez7hqop4dKVJlRmceuLJm9YhVldT1W5rbsHffyqMrBiKbFWV3/JFSdFLBiKXVzMaxv9Ljwxuh0nqRtNXqfdrE2RjlqVKdvnOhUg3VhmGqnjL2G1nP6uGQew50CZCAQVZR1iNBa7ajx7ALtgMQaiI53sBmtuzbmt2XBnfTY6ONs0rvv52ca11cpLnOG3wPzvD75mTB2cfa7xM6et5yIiAiIgIiICIiAiIgIiICIiAmn6UH82e9t6bxmH6Rd44ibiabpUpOGcAXJKaHj110gV/ZR0fw3OXHHQX3d03zGw8zK9sl7hxkCWyjlcda2nAfjNrtXEerRj2W8Tf8DFIq+2cflvrlBJtzPd+MwsBjAm5SATe5NyT2mY+Pw5e+drE68LgcgOA/q8xMIQuZuCKbcBfnbnMrd61k2ix1tog6DQ/aN3w++afbiMGWrTJUucr2IHXUXVrn3lv9QnjNFh9ra3LaWFjyYcDy75u2rivQdQNcoqKOTJq1v2C/mZ1hbMvLnPGXHwgoo9hmqOp4gMmniXHZpPTEhkLOzgONGZTYXHAO0xsPjsqgZTcW1DINALf4ffvJ3zJeutRLFsvGxLGxvyVADfXzm2WO8s+WON2sqxYVcrKy1EVs3zrWXQ9Y37vO0y8TihmYesDL8nZFOfMWYbi30iS3PfMDYT+upMAKjOgNgMoR/wBsocrdhPd2Y2LfE0ySyFBfjUU3Ft917hpPkY9Jq4zafu+leowyu9TtRQD2mO/cDpYcdOcsmxFK0kB7/rMWHwImv2VgxUTNURhcnTO4BB7M2ut9eOk3ScJv03TXTzuV249MtfXmePbN2w2V8/8AWH2TYzXbJ3N+t9wmxnteUiIgIiICIiAiIgIiICIiAiIgJo+lZ/N2BBN2TQbzZwdO3TdN5NH0rqBaIzC4LqDpfQhtSOUDRbNPVNi/zfbvy3gnfe/DSSdJXsBe9r7gbbt2viZhrtCjRS7VFUH2dWfdobAXNhyEx9v7Zo1kBpvm3/NZDftVwCPKKTlXcXi0ZsoUdgtxvMDa2M9WljvOtt+g1C9pJ4dkw3fK7E3tuABUX5nMdAJatm43DKisTTLC3zg2W/aePadZlOWt4UPC7JxBJZaTZW4MMvAajNaWLYtYYd1D2WxBIvn046LcbuE97d6S3t6thvAI0sRrex4c7iU/E4pmN2bOL311I37rzrzXG8jsa4fZ1XVaa/siog8lt9kno4TA0zpST9sO/wAHvOUbL2wyEBb5eIFyLjiBwm5p7Zcnc3kfwnW+SbYuq0cQjiyEWG4DS3cOEgxBa4y5tzXy5Oy1y3ju8ZQsJtgowfrC3ADXyJm8bpggX9G7N2lVHnr9kXG5RO6SrAiud5ca+8n3D+rSQUBe+Z9/vH7pV6PTQfOoEH6NQMPMqPsnyr009yh9Z/wWJprdRfdlH2/1psZVehO2GxXriyKuUpuJN82fn3S1So+xEQEREBERAREQEREBERAREQPkpXpRxbUsNTZGKt8oSxHYlQ+PdLrOf+l9vzaiP86/kjj75ceUvCh1NpPiMpdUBW46gy3uQbkX3zKWanZ43frfhNuJozeTIHFzbiSAL9vad0lqOBMN2vCPLYW9uqutteqPay2uf21+PIzz6kgkXGgvv+AtxnhzPCwMz1Fh7Sm19AwJ0KjS2/2vgeUmWj9NeHG+8X5eExFmQkCbINxYb94vzH4nykbqBuObTkRbs1gz5eVXm8XgieDIOgei9tcQOykf4k6BOdei49fED6NL7X/GdFmeXLScPsREikREBERAREQEREBERAREQPko3pWwLVMGKia+pcO4+gVZSfAlSewE8JeZHVphwVYAqwIYHUEEWII5WiJZu/PWz20Hf982DPL4vo0oAnLXqqtzZbIbAm4FyNbbrydfRzQ41q57jSH+id90cdtc2Z5C7zqi+jrC8WrN3uv3KJIPR7geKVD31HH2ER3Q7a4+7wjTsidANnj+4Y99Wsf9cmToTgBuw6+LVD9rR3Re2uOI8mR52ReiWCH/ALal4i/2yZOjWDG7C0P3aH7RHcdrixqDnPDVl5jznc02Nhl3YeiO6mg+6Trg6a7kQdyqPujuO1wI4pPfXzE9I+b2bt3a/ZP0CqAbgB3T1J3na516L6Th65ZWUZKYuQQCbvuvvnRYn2S3d1JsRESKREQEREBERAREQEREBERAREQEREBERA+REQPsREBERAREQEREBERAREQEREBERA//2Q=="
                                alt="">
                            <p class="text-green-500 font-bold mt-3 text-sm">Rp.168.000</p>
                            <span class="text-sm">2x Royal Canin Hair & Skin Care Makanan </span>
                            <div class="flex gap-x-1 mt-2">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg height="15px" width="15px" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 47.94 47.94" xml:space="preserve" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#ED8A19;"
                                                d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z">
                                            </path>
                                        </g>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
