<?php
//Copyright (c) 2016 iFeiwu.com
 class Uploader extends Ifeiwu { function __construct() { } protected function postImage($request_data) { goto PGPRs; un3h9: if (!$handle->uploaded) { goto Hg_P3; } goto zaji3; Rx16W: SNurv: goto tVVfj; dZz0a: $handle->jpeg_quality = $quality; goto n32Kh; D2ZJh: Hg_P3: goto Pv2yS; tVVfj: $handle->file_overwrite = $file_overwrite ? true : false; goto yV1Vc; PGPRs: $_FILES["\146\151\154\x65"]["\x6e\x61\155\145"] = $_POST["\146\151\154\x65\x5f\x6e\x61\x6d\145"]; goto fufOr; UVRmq: aBRUm: goto TnXvi; EYUMI: $_FILES["\146\x69\x6c\x65"]["\163\x69\172\x65"] = $_POST["\x66\151\154\x65\x5f\x73\x69\172\145"]; goto QYG3l; MEo9K: $image_resize = $_POST["\x69\x6d\x61\147\145\137\162\x65\x73\x69\172\145"]; goto K77AY; OXIKq: if ($image_resize == 1) { goto wH5rS; } goto z3EwN; GF_pU: $image_y = explode("\x2c", $_POST["\151\155\141\147\x65\x5f\x79"]); goto T4hG2; zVMov: $image_x = explode("\x2c", $_POST["\151\155\141\147\145\137\170"]); goto GF_pU; q4WPq: EMtQA: goto n5C3P; OczFd: $image_convert = $_POST["\151\x6d\141\147\x65\x5f\x63\157\x6e\x76\145\162\164"]; goto aWklz; PlOYx: if (!$image_convert) { goto Bcx_J; } goto AGFJE; OrUVm: if (!$quality) { goto CnGdF; } goto dZz0a; lHASO: NyDHW: goto zIijT; SHXSv: Bcx_J: goto pq3GJ; QYG3l: $_FILES["\x66\151\x6c\x65"]["\145\x72\x72\157\x72"] = $_POST["\146\151\x6c\x65\137\145\162\162\157\162"]; goto cL5Wq; IaV59: goto aBRUm; goto cGxdU; OJuok: IRJDp: goto D2ZJh; h_L8u: $file_new_name_body = $_POST["\x66\x69\154\x65\137\156\x65\x77\137\156\x61\x6d\x65\x5f\x62\x6f\144\x79"]; goto TZs2V; aQjEl: nb9gY: goto OJuok; n5C3P: ifeiwu\Loader::import("\x65\170\x74\x65\x6e\x64\x2f\125\x70\154\157\141\x64"); goto awCrF; MuCLh: $file_save_path = ''; goto lHASO; zIijT: return $this->success('', array("\160\141\164\x68" => $file_save_path, "\x69\155\141\x67\x65" => $handle->file_dst_name, "\x73\151\x7a\145" => $handle->file_src_size, "\x77\151\144\164\150" => $handle->image_src_x, "\x68\145\x69\x67\x68\x74" => $handle->image_src_y, "\164\171\x70\145" => $handle->image_dst_type, "\145\x78\x74" => $handle->file_dst_name_ext)); goto UVRmq; AGFJE: $handle->image_convert = $image_convert; goto SHXSv; aWklz: $jpeg_quality = explode("\x2c", $_POST["\x6a\160\x65\x67\x5f\x71\x75\x61\154\151\x74\171"]); goto OXIKq; AMNwv: $handle->file_new_name_body = $file_new_name_body; goto Rx16W; T4hG2: foreach ($file_name_body_pre as $key => $prefix) { goto Iq0BW; NhKcz: $handle->Process($upload_root . "\x2f" . $file_save_path); goto MaA5v; GpIsa: Xn57E: goto UrWlY; bcNVV: $handle->image_x = $width; goto n4PSD; xGV3d: EK8YI: goto IEhkV; hwC8F: if ($width && $handle->image_src_x > $width) { goto TvNTa; } goto zq4ji; L5sAS: $height = $image_y[$key]; goto rjrKV; Ln1vh: if (!$quality) { goto EK8YI; } goto tb3k0; tb3k0: $handle->jpeg_quality = $quality; goto xGV3d; IqNDD: if (!$prefix) { goto SZMc8; } goto C7vbU; IEhkV: if (!$image_convert) { goto XN41G; } goto AmeM0; Iq0BW: $width = $image_x[$key]; goto L5sAS; a2M09: css3Y: goto be2HR; DE59w: $handle->image_ratio_y = true; goto c2cfH; AFCs1: goto idyW6; goto tu5kh; a13ry: if ($height && $handle->image_src_y > $height) { goto css3Y; } goto DE59w; c2cfH: goto Xn57E; goto a2M09; UrWlY: if (!$file_new_name_body) { goto hwKsI; } goto k_6tn; MaA5v: O073j: goto jme6q; w2VsY: SZMc8: goto Ln1vh; be2HR: $handle->image_y = $height; goto GpIsa; ri9B_: $handle->file_name_body_pre = $prefix; goto w2VsY; rjrKV: $quality = $jpeg_quality[$key]; goto IqNDD; De5Ax: $handle->file_overwrite = $file_overwrite ? true : false; goto NhKcz; n4PSD: idyW6: goto a13ry; wOsHU: hwKsI: goto De5Ax; tu5kh: TvNTa: goto bcNVV; k_6tn: $handle->file_new_name_body = $file_new_name_body; goto wOsHU; C7vbU: $handle->image_resize = $image_resize ? true : false; goto ri9B_; Nmf0j: XN41G: goto hwC8F; AmeM0: $handle->image_convert = $image_convert; goto Nmf0j; zq4ji: $handle->image_x = $handle->image_src_x; goto AFCs1; jme6q: } goto aQjEl; aHDmb: goto j_l8q; goto q4WPq; n32Kh: CnGdF: goto PlOYx; Pv2yS: if ($handle->processed) { goto jOvs1; } goto BZWHq; pq3GJ: if (!$file_new_name_body) { goto SNurv; } goto AMNwv; yV1Vc: $handle->Process($upload_root . "\57" . $file_save_path); goto I955I; K77AY: $file_save_path = $_POST["\146\x69\154\x65\x5f\163\x61\x76\x65\x5f\160\141\x74\150"]; goto OczFd; awCrF: $handle = new Upload($_FILES["\146\x69\154\145"]); goto un3h9; F02UV: wH5rS: goto HyIUU; HyIUU: $file_name_body_pre = explode("\54", $_POST["\x66\x69\154\145\x5f\x6e\x61\155\x65\x5f\x62\x6f\144\171\x5f\160\162\145"]); goto zVMov; cGxdU: jOvs1: goto rih81; TnXvi: j_l8q: goto RFOqH; fufOr: $_FILES["\x66\151\x6c\145"]["\164\x79\x70\145"] = $_POST["\x66\151\154\145\137\x74\171\160\145"]; goto EYUMI; BZWHq: return $this->error($handle->log); goto IaV59; TZs2V: $file_overwrite = $_POST["\146\151\154\145\x5f\x6f\x76\x65\x72\167\x72\151\x74\145"]; goto MEo9K; cL5Wq: if (!empty($_FILES["\146\x69\x6c\145"])) { goto EMtQA; } goto aMf2W; rih81: if (!($file_save_path == "\57")) { goto NyDHW; } goto MuCLh; aMf2W: return $this->error("\xe6\x97\xa0\xe6\x95\210\347\232\204\346\x96\207\344\273\xb6\xe4\277\xa1\346\x81\xaf\357\274\201"); goto aHDmb; zaji3: $upload_root = "\56\x2e\57"; goto h_L8u; z3EwN: $quality = end($jpeg_quality); goto OrUVm; I955I: goto IRJDp; goto F02UV; RFOqH: } protected function postFile($request_data) { goto dIQCv; CVmBb: $resumableIdentifier = $_POST["\162\x65\163\165\x6d\141\142\x6c\145\x49\144\x65\x6e\164\x69\x66\151\x65\162"]; goto IXjy3; VFPry: TwiZn: goto fUQip; tRG8Z: if (!move_uploaded_file($file["\x74\x6d\160\137\x6e\141\x6d\x65"], $dest_file)) { goto TwiZn; } goto Ag4SW; sMW3n: $this->_debug("\x65\162\162\x6f\x72\x20" . $file["\145\162\162\x6f\162"] . "\x20\x69\156\40\146\151\x6c\x65\40" . $resumableFilename); goto yXDbz; dIQCv: $save_path = "\x2e\x2e\x2f" . $this->_UTF82GBK($_POST["\163\141\166\145\137\160\x61\x74\x68"]); goto w5aY5; w5aY5: $resumableFilename = $this->_UTF82GBK($_POST["\x72\145\x73\x75\155\141\142\154\145\106\151\x6c\x65\156\141\155\x65"]); goto gS3T7; uysmk: xy_8W: goto dmw41; WZTvx: if (!($file["\x65\162\162\157\x72"] != 0)) { goto B7hDN; } goto sMW3n; Ag4SW: $this->_createFileFromChunks($save_path, $temp_dir, $resumableFilename, $_POST["\x72\145\163\165\x6d\x61\142\154\x65\103\x68\x75\x6e\153\x53\151\x7a\145"], $_POST["\162\145\163\x75\x6d\141\x62\x6c\x65\x54\x6f\164\x61\x6c\123\x69\172\x65"]); goto DyNPq; yXDbz: B7hDN: goto Fy0sx; DyNPq: goto xy_8W; goto VFPry; ZWlPB: $file = $_FILES["\146\x69\154\x65"]; goto WZTvx; ccHAt: mkdir($temp_dir, 511, true); goto sxmIn; Vp_UQ: $_FILES["\x66\151\x6c\x65"]["\x74\171\x70\145"] = $_POST["\146\151\x6c\x65\x5f\164\x79\160\x65"]; goto pPdGV; sxmIn: klGYG: goto tRG8Z; gS3T7: $resumableChunkNumber = $_POST["\x72\145\x73\x75\155\141\x62\x6c\145\103\x68\x75\156\x6b\116\165\x6d\142\145\x72"]; goto CVmBb; kfW_q: $_FILES["\146\x69\x6c\145"]["\145\162\162\x6f\x72"] = $_POST["\x66\x69\x6c\x65\x5f\x65\162\162\157\x72"]; goto ZWlPB; fUQip: $this->_debug("\x45\162\162\x6f\162\x20\163\x61\166\x69\x6e\147\40\x28\x6d\157\166\x65\x5f\x75\x70\154\157\x61\144\145\144\137\146\151\x6c\x65\51\x20\x63\150\x75\156\x6b\x20" . $resumableChunkNumber . "\40\x66\157\x72\40\x66\151\x6c\145\x20" . $resumableFilename); goto uysmk; ErF6A: if (is_dir($temp_dir)) { goto klGYG; } goto ccHAt; Fy0sx: $temp_dir = $save_path . "\x2f" . $resumableIdentifier; goto XHwhS; XHwhS: $dest_file = $temp_dir . "\x2f" . $resumableFilename . "\x2e\160\x61\x72\x74" . $resumableChunkNumber; goto ErF6A; pPdGV: $_FILES["\146\151\154\145"]["\163\151\x7a\145"] = $_POST["\x66\x69\154\x65\x5f\x73\x69\x7a\145"]; goto kfW_q; IXjy3: $_FILES["\146\151\x6c\145"]["\156\141\x6d\x65"] = $_POST["\x66\151\x6c\145\x5f\x6e\x61\155\x65"]; goto Vp_UQ; dmw41: } protected function getFile() { goto KbR23; dQWH9: $resumableFilename = $this->_UTF82GBK($_GET["\162\145\x73\x75\x6d\141\x62\x6c\x65\106\151\154\x65\x6e\141\155\x65"]); goto Gb_bh; c9k6T: $chunk_file = $temp_dir . "\x2f" . $resumableFilename . "\x2e\160\141\162\x74" . $resumableChunkNumber; goto dlbnc; xp_wr: $resumableIdentifier = $_GET["\162\x65\x73\x75\x6d\x61\142\x6c\x65\x49\144\x65\x6e\x74\x69\x66\151\x65\x72"]; goto CkUcU; dlbnc: if (file_exists($chunk_file)) { goto PRe6o; } goto Hfv03; CkUcU: $temp_dir = $save_path . "\x2f" . $resumableIdentifier; goto c9k6T; WfqCm: Ums2D: goto sRIRd; IpXs8: goto Ums2D; goto dh6f0; Gb_bh: $resumableChunkNumber = $_GET["\162\x65\163\x75\x6d\x61\x62\154\145\103\150\x75\x6e\153\x4e\165\155\x62\145\x72"]; goto xp_wr; rskcP: return 202; goto WfqCm; Hfv03: return 404; goto IpXs8; dh6f0: PRe6o: goto rskcP; KbR23: $save_path = "\x2e\56\57" . $this->_UTF82GBK($_GET["\x73\x61\x76\145\137\x70\141\164\150"]); goto dQWH9; sRIRd: } private function _createFileFromChunks($save_path, $temp_dir, $fileName, $chunkSize, $totalSize) { goto y4ohL; iKpl2: qM7hT: goto rhD5B; SOU4S: KDHVD: goto dDKd2; XNoUj: goto mUKjA; goto SOU4S; TdJGE: mUKjA: goto lGQ1a; Sfvg2: $this->_rrmdir($temp_dir . "\x5f\x55\116\x55\123\105\x44"); goto aBXbm; lGQ1a: if (rename($temp_dir, $temp_dir . "\x5f\125\116\x55\123\105\x44")) { goto FESbm; } goto S8qrB; QqrjE: goto gQ2RJ; goto VmbRN; G5V8F: fclose($fp); goto TdJGE; lznsX: FESbm: goto Sfvg2; aBXbm: YNgmu: goto jmbdd; suuDD: if (!($i <= $total_files)) { goto s4wpj; } goto DHruJ; VmbRN: s4wpj: goto G5V8F; S8qrB: $this->_rrmdir($temp_dir); goto u20WG; y4ohL: $total_files = 0; goto w7nYT; w7nYT: foreach (scandir($temp_dir) as $file) { goto E6G1B; MKvV8: MKHky: goto UvoCl; p5_X7: $total_files++; goto MKvV8; E6G1B: if (!(stripos($file, $fileName) !== false)) { goto MKHky; } goto p5_X7; UvoCl: En8ki: goto XeK2b; XeK2b: } goto iKpl2; OFJZX: $this->_debug("\x63\x61\x6e\156\157\x74\40\x63\162\x65\141\x74\x65\40\164\x68\145\x20\x64\x65\163\x74\151\156\141\x74\x69\x6f\156\x20\x66\x69\154\x65"); goto DNVRy; u20WG: goto YNgmu; goto lznsX; dDKd2: $i = 1; goto bHx95; rhD5B: if (!($total_files * $chunkSize >= $totalSize - $chunkSize + 1)) { goto Wms03; } goto HIcQx; HIcQx: if (($fp = fopen($save_path . "\57" . $fileName, "\x77")) !== false) { goto KDHVD; } goto OFJZX; ZcHGL: $i++; goto QqrjE; DHruJ: fwrite($fp, file_get_contents($temp_dir . "\57" . $fileName . "\x2e\160\x61\162\164" . $i)); goto XnL_7; XnL_7: yPNrF: goto ZcHGL; DNVRy: return false; goto XNoUj; bHx95: gQ2RJ: goto suuDD; jmbdd: Wms03: goto LEovS; LEovS: } private function _rrmdir($dir) { goto M3nqi; M3nqi: if (!is_dir($dir)) { goto w3net; } goto RfShQ; FrJod: rmdir($dir); goto gd7Lh; gd7Lh: w3net: goto JjPpk; hycuV: reset($objects); goto FrJod; RHuvD: foreach ($objects as $object) { goto U18Cq; wz7jS: CdLzZ: goto wUpfI; wUpfI: WAAE2: goto NjTG0; kbzxi: e11vl: goto wz7jS; U18Cq: if (!($object != "\x2e" && $object != "\56\x2e")) { goto CdLzZ; } goto ER68Q; uTDwq: FIH1g: goto CGtm6; s1Q0x: goto e11vl; goto uTDwq; CGtm6: $this->_rrmdir($dir . "\57" . $object); goto kbzxi; Xm9JS: unlink($dir . "\57" . $object); goto s1Q0x; ER68Q: if (filetype($dir . "\x2f" . $object) == "\x64\x69\162") { goto FIH1g; } goto Xm9JS; NjTG0: } goto a7mEP; RfShQ: $objects = scandir($dir); goto RHuvD; a7mEP: ONrE7: goto hycuV; JjPpk: } }
