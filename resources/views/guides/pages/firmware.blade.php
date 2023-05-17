@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Basic Template</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <video width="720" height="480px" controls>
                                        <source src="{{asset("/guide_resources/assets/video/firmware/firmware_binwalk.mp4")}}"
                                                type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>this video shows the setup to read the firmware off a memory chip and also uses
                                        binwalk in the console to view file system.</p>
                                    <p>firmware is usually a bin file</p>
                                    <p>binwalk -e firmware.bin gives a overview of file. </p>
                                    <p>-e automatically extracts known filetypes</p>
                                    <div class=" code-info alert alert-info border border-dark"
                                         style="font-weight:bold">
                                        binwalk -e firmware.bin
                                    </div>
                                    <video width="720" height="480px" controls>
                                        <source src="{{asset("/guide_resources/assets/video/firmware/firmware_reverse_engineering.mp4")}}"
                                                type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>this video takes firmware and slices binary to extract filesystem</p>
                                    <p> file firmware.bin tells what kind of file it is</p>
                                    <div class=" code-info alert alert-info border border-dark"
                                         style="font-weight:bold">
                                        file firmware.bin
                                    </div>
                                    <p>strings will search for printable characters in a specified legth, this command
                                        searches for 10 printable characters in a row(-10) and displays the first 10
                                        occurances. (|head) </p>
                                    <div class=" code-info alert alert-info border border-dark"
                                         style="font-weight:bold">
                                        strings -10 firmware.bin |head
                                    </div>
                                    <p>binwalk gives location of files in Decimal and hexadecimal and also gives a
                                        description</p>
                                    <p>dd inputfile=firmware.bin skip to the decimal location of desired directory,
                                        blocksize = 1 and give an output file. lzma is a compressed filesystem which may
                                        or may not be present.</p>
                                    <div class=" code-info alert alert-info border border-dark"
                                         style="font-weight:bold">
                                        dd if=firmware.bin skip=327744 bs=1 of=kernal.lzma
                                    </div>
                                    <p>unlzma resulting lzma file and binwalk uncompressed file </p>
                                    <p>look for cpio archive</p>
                                    <p>cpio is a linux filesystem, so mkdir cpio;cd cpio so that you can keep it
                                        seperate from your image.</p>
                                    <p>cpio -idm --no-absolute-filenames < ../kernal.lzma --no-absolute-filenames will
                                        make it not overwrite any files in your linux kernal</p>
                                    <div class=" code-info alert alert-info border border-dark"
                                         style="font-weight:bold">
                                        cpio -idm --no-absolute-filenames < ../kernal.lzma
                                    </div>
                                    <hr>

                                    <p>Binwalk is a tool for searching a given binary image for embedded files and
                                        executable code. Specifically, it is designed for identifying files and code
                                        embedded inside of firmware images. Binwalk uses the libmagic library, so it is
                                        compatible with magic signatures created for the Unix file utility. Binwalk also
                                        includes a custom magic signature file which contains improved signatures for
                                        files that are commonly found in firmware images such as compressed/archived
                                        files, firmware headers, Linux kernels, bootloaders, filesystems, etc.</p>
                                    <p> root@kali:~# binwalk -h</p>

                                    <p> Binwalk v2.1.2</p>
                                    <p> Craig Heffner, ReFirmLabs</p>
                                    <p> https://github.com/ReFirmLabs/binwalk</p>
                                    <br>
                                    <p> Usage: binwalk [OPTIONS] [FILE1] [FILE2] [FILE3] ...</p>
                                    <br>
                                    <p> Signature Scan Options:</p>
                                    <p> -B, --signature Scan target file(s) for common file signatures</p>
                                    <p> -R, --raw= str Scan target file(s) for the specified sequence of bytes</p>
                                    <p> -A, --opcodes Scan target file(s) for common executable opcode signatures</p>
                                    <p> -m, --magic= file Specify a custom magic file to use</p>
                                    <p> -b, --dumb Disable smart signature keywords</p>
                                    <p> -I, --invalid Show results marked as invalid</p>
                                    <p> -x, --exclude= str Exclude results that match str</p>
                                    <p> -y, --include= str Only show results that match str</p>
                                    <p> Extraction Options:</p>
                                    <p> -e, --extract Automatically extract known file types</p>
                                    <p> -D, --dd= type:ext:cmd Extract type signatures, give the files an extension of
                                        ext, and execute cmd</p>
                                    <p> -M, --matryoshka Recursively scan extracted files</p>
                                    <p> -d, --depth= int Limit matryoshka recursion depth (default: 8 levels deep)</p>
                                    <p> -C, --directory= str Extract files/folders to a custom directory (default:
                                        current working directory)</p>
                                    <p> -j, --size= int Limit the size of each extracted file</p>
                                    <p> -n, --count= int Limit the number of extracted files</p>
                                    <p> -r, --rm Delete carved files after extraction</p>
                                    <p> -z, --carve Carve data from files, but don't execute extraction utilities</p>
                                    <p> -V, --subdirs Extract into sub-directories named by the offset
                                    <p>
                                        <br>
                                    <p> Entropy Options:</p>
                                    <p> -E, --entropy Calculate file entropy</p>
                                    <p> -F, --fast Use faster, but less detailed, entropy analysis</p>
                                    <p> -J, --save Save plot as a PNG</p>
                                    <p> -Q, --nlegend Omit the legend from the entropy plot graph</p>
                                    <p> -N, --nplot Do not generate an entropy plot graph</p>
                                    <p> -H, --high= float Set the rising edge entropy trigger threshold (default:
                                        0.95)</p>
                                    <p> -L, --low= float Set the falling edge entropy trigger threshold (default:
                                        0.85)</p>
                                    <br>
                                    <p> Binary Diffing Options:</p>
                                    <p> -W, --hexdump Perform a hexdump / diff of a file or files</p>
                                    <p> -G, --green Only show lines containing bytes that are the same among all
                                        files</p>
                                    <p> -i, --red Only show lines containing bytes that are different among all
                                        files</p>
                                    <p> -U, --blue Only show lines containing bytes that are different among some
                                        files</p>
                                    <p> -w, --terse Diff all files, but only display a hex dump of the first file</p>
                                    <br>
                                    <p> Raw Compression Options:
                                    <p>
                                    <p> -X, --deflate Scan for raw deflate compression streams</p>
                                    <p> -Z, --lzma Scan for raw LZMA compression streams</p>
                                    <p> -P, --partial Perform a superficial, but faster, scan</p>
                                    <p> -S, --stop Stop after the first result</p>
                                    <br>
                                    <p> General Options:</p>
                                    <p> -l, --length= int Number of bytes to scan</p>
                                    <p> -o, --offset= int Start scan at this file offset</p>
                                    <p> -O, --base= int Add a base address to all printed offsets</p>
                                    <p> -K, --block= int Set file block size</p>
                                    <p> -g, --swap= int Reverse every n bytes before scanning</p>
                                    <p> -f, --log= file Log results to file</p>
                                    <p> -c, --csv Log results to file in CSV format</p>
                                    <p> -t, --term Format output to fit the terminal window</p>
                                    <p> -q, --quiet Suppress output to stdout</p>
                                    <p> -v, --verbose Enable verbose output</p>
                                    <p> -h, --help Show help output</p>
                                    <p> -a, --finclude= str Only scan files whose names match this regex</p>
                                    <p> -p, --fexclude= str Do not scan files whose names match this regex</p>
                                    <p> -s, --status= int Enable the status server on the specified port</p>

                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
@endsection