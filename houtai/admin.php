<?php
//Copyright (c) 2016 iFeiwu.com
 class Admin extends Item { function __construct() { $this->table = "\x61\144\155\x69\156"; parent::__construct(); } public function postLogin($request_data) { goto F8DQj; hQ3li: return $this->error("\347\224\xa8\xe6\x88\xb7\345\220\x8d\xe6\x88\x96\xe5\257\206\347\240\201\344\xb8\215\xe6\xad\xa3\347\241\256\xef\274\x81"); goto guYIC; WEXAe: if ($admin) { goto jDz_a; } goto hQ3li; yC9Vm: ifeiwu\Loader::import("\145\x78\164\145\x6e\144\x2f\120\141\x73\x73\167\x6f\162\144\x48\x61\163\x68"); goto HAaHN; O4vwY: $admin = $this->db->select($this->table)->where("\x73\x74\141\164\145\40\75\x20\x31\40\x41\x4e\104\x20\156\x61\x6d\145\40\x3d\x20\77", array($name))->get(); goto WEXAe; OHk2I: $json = json_decode($admin["\x6a\x73\x6f\156"], true); goto TyTRk; guYIC: jDz_a: goto yC9Vm; vu0RY: z1kpO: goto OHk2I; vmyVQ: $pass = $request_data["\x70\141\x73\163"]; goto O4vwY; TyTRk: $json["\x6c\157\147\x69\156\137\164\x69\155\145"] = date("\131\55\x6d\x2d\144\x20\x48\72\151"); goto Ew0Vy; Ua2Tt: $this->_log("\x6c\157\x67\x69\156", array("\x61\x64\x6d\x69\156\x5f\x69\x64" => $admin["\x69\144"], "\141\144\155\x69\x6e\137\156\141\x6d\x65" => $admin["\x6e\141\x6d\145"])); goto Rv4VN; Ew0Vy: $json["\154\x6f\147\x69\156\137\x69\160"] = $this->_getIP(); goto UOd5O; UOd5O: $json["\x6c\157\x67\x69\x6e\x5f\143\x6f\165\x6e\164"] = $json["\154\157\147\x69\x6e\137\x63\x6f\165\x6e\164"] + 1; goto fYGkN; XXdbG: return $this->error("\347\224\xa8\346\x88\xb7\xe5\220\x8d\xe6\x88\x96\xe5\xaf\206\347\240\201\344\xb8\x8d\346\255\xa3\xe7\241\256\xef\xbc\201"); goto vu0RY; F8DQj: $name = $request_data["\156\x61\x6d\x65"]; goto vmyVQ; HAaHN: $hasher = new PasswordHash(8, false); goto YK1vV; EylkA: $admin["\162\x75\156\x74\151\x6d\145"] = $this->_runtime(); goto Ua2Tt; YK1vV: if ($hasher->CheckPassword($pass, $admin["\160\141\163\163"])) { goto z1kpO; } goto XXdbG; Rv4VN: return $this->success($admin); goto sWJTK; fYGkN: $this->db->update($this->table, array("\152\163\157\x6e" => json_encode($json)), array("\151\144", "\75", $admin["\151\144"])); goto EylkA; sWJTK: } protected function postPassword($id, $request_data) { goto uPkEk; XSgap: if ($hasher->CheckPassword($old_pass, $admin["\x70\141\163\163"])) { goto s6Eto; } goto FHIK0; oQQXb: $data = array("\160\141\163\163" => $hasher->HashPassword($pass), "\x6a\163\157\x6e" => json_encode($json)); goto kM79O; NFEZk: q_wb1: goto V_JFx; aWRmv: $pass = $request_data["\160\141\163\x73"]; goto RoPi0; uPkEk: $admin = $this->db->select($this->table)->where("\163\164\141\164\x65\40\75\40\x31\x20\x41\116\104\x20\x69\x64\40\x3d\x20\x3f", array($id))->get(); goto MPqw8; UHvEN: $json = json_decode($admin["\152\163\x6f\156"], true); goto wnEB7; RoPi0: ifeiwu\Loader::extend("\120\141\x73\163\167\157\162\144\x48\141\x73\150"); goto Q1nkW; V_JFx: return $this->success("\xe8\257\267\xe4\275\277\xe7\x94\250\346\x96\xb0\xe5\xaf\x86\347\240\x81\xe9\207\215\346\x96\260\347\231\273\xe5\275\x95\xef\274\201"); goto N3oGl; kM79O: if ($this->db->update($this->table, $data, array("\x69\144", "\75", $id))->is()) { goto q_wb1; } goto hjYsP; Q1nkW: $hasher = new PasswordHash(8, false); goto XSgap; wnEB7: $json["\x70\141\163\163\x5f\164\x69\x6d\145"] = time(); goto oQQXb; N3oGl: Tg154: goto sL6m5; FHIK0: return $this->error("\346\227\247\345\257\x86\xe7\xa0\x81\xe4\270\215\346\xad\xa3\347\xa1\256\xef\xbc\201"); goto J0xTE; MPqw8: $old_pass = $request_data["\x6f\154\x64\160\141\x73\163"]; goto aWRmv; Ce8vz: goto Tg154; goto NFEZk; J0xTE: s6Eto: goto UHvEN; hjYsP: return $this->error("\350\xaf\xb7\347\xa8\215\xe5\x80\231\345\x86\215\350\xaf\225\56\x2e\56"); goto Ce8vz; sL6m5: } protected function postPassword2($request_data) { goto FsnUz; nRyLe: return $this->error("\xe9\x94\x99\xe8\xaf\257\357\274\214\350\257\267\xe7\xa8\215\345\x80\x99\xe5\x86\x8d\xe8\xaf\225\x2e\x2e\56"); goto aDY50; aDY50: goto yNmIi; goto bnr8c; FsnUz: $pass = $request_data["\x70\x61\x73\x73"]; goto jalBs; Sny4R: if ($this->db->update($this->table, array("\x70\141\x73\163" => $hasher->HashPassword($pass)), "\151\144\40\x3d\40\61")->is()) { goto aXnlY; } goto nRyLe; jalBs: ifeiwu\Loader::extend("\120\x61\x73\x73\x77\157\x72\x64\110\141\163\150"); goto CKniy; T0Lw_: yNmIi: goto sIS_L; bnr8c: aXnlY: goto SKTQe; SKTQe: return $this->success(); goto T0Lw_; CKniy: $hasher = new PasswordHash(8, false); goto Sny4R; sIS_L: } protected function postAdd($request_data) { goto Fo6Pj; bVcX7: goto AppNA; goto n7gC_; fjZde: AppNA: goto Of0ol; kOn9B: return $this->success(); goto fjZde; h0IOU: $data["\163\x74\141\x74\x65"] = $request_data["\163\164\x61\x74\x65"] ?: 0; goto F9nU2; enqUa: $data["\x63\x74\x69\x6d\145"] = time(); goto alMQ6; MS6cq: $data["\160\x61\x73\163"] = $hasher->HashPassword($request_data["\160\141\163\163"]); goto h0IOU; B7kYs: $data["\x6e\x61\x6d\x65"] = $request_data["\x6e\x61\x6d\145"]; goto MS6cq; alMQ6: if ($this->db->insert($this->table, $data)->is()) { goto qOOAR; } goto nW305; YtRAr: $hasher = new PasswordHash(8, false); goto B7kYs; Fo6Pj: ifeiwu\Loader::import("\145\x78\164\145\x6e\144\57\120\x61\x73\x73\x77\x6f\x72\x64\110\x61\163\x68"); goto YtRAr; nW305: return $this->error("\xe5\xb8\220\xe5\217\xb7\xe5\xb7\xb2\345\xad\230\xe5\x9c\250\xef\274\201"); goto bVcX7; n7gC_: qOOAR: goto wwMYS; F9nU2: $data["\162\x62\141\x63"] = $request_data["\162\x62\x61\143"] ?: "\x6e\x6f\x72\x6d\141\154"; goto N7OFf; N7OFf: $data["\152\163\157\x6e"] = json_encode(array("\154\141\x73\164\137\x74\151\x6d\x65" => "\x2d\55\55\55\x2d", "\x6c\141\x73\164\137\151\x70" => "\60\56\60\56\x30\x2e\60", "\154\x6f\x67\x69\x6e\x5f\143\157\x75\156\x74" => 0)); goto enqUa; wwMYS: $this->_log("\141\144\x64", array("\x74\x69\x74\154\x65" => $data["\x6e\x61\x6d\145"])); goto kOn9B; Of0ol: } protected function postUpdate($id, $request_data) { goto UaNmN; SEKJs: $data["\162\x65\141\154\x6e\x61\x6d\x65"] = $request_data["\162\x65\141\154\x6e\x61\155\145"]; goto QLSEY; xpvbI: $data["\156\141\155\145"] = $request_data["\x6e\x61\155\x65"]; goto CMccx; Ec3qz: MbjKh: goto aivSQ; xH4B2: return $this->success(); goto VdtqA; VdtqA: oYJG4: goto O6NrT; dYuYu: $data["\x75\164\x69\x6d\x65"] = time(); goto c2Ht0; Obwi_: if (!isset($request_data["\x6e\141\x6d\145"])) { goto hPCwy; } goto xpvbI; kZlN5: $data["\x70\x61\163\163"] = $hasher->HashPassword($request_data["\x70\x61\163\x73"]); goto VHpj2; aivSQ: if (!isset($request_data["\x70\141\x73\163"])) { goto BPAWh; } goto kZlN5; GNxzH: cKvlW: goto eHma2; wQ73Q: return $this->error("\350\xaf\xb7\xe7\250\215\345\200\x99\xe5\x86\x8d\xe8\xaf\x95\56\x2e\x2e"); goto JlYRa; eHma2: $this->_log("\x75\x70\144\141\x74\145", array("\164\151\x74\154\x65" => $data["\156\x61\x6d\145"])); goto xH4B2; bpuy7: $data["\163\x65\x78"] = $request_data["\x73\145\x78"]; goto dYuYu; JlYRa: goto oYJG4; goto GNxzH; Suqu4: w10hd: goto ag6cI; UaNmN: ifeiwu\Loader::import("\x65\170\x74\x65\x6e\x64\57\120\141\x73\x73\x77\157\x72\x64\x48\141\x73\150"); goto UjsfW; P6ki6: $data["\x6d\157\142\151\x6c\145"] = $request_data["\155\x6f\142\x69\154\x65"]; goto hpTVs; WJOCj: $data["\163\x74\141\164\145"] = $request_data["\163\x74\x61\164\145"]; goto Suqu4; c2Ht0: if ($this->db->update($this->table, $data, array("\151\144", "\75", $id))->is()) { goto cKvlW; } goto wQ73Q; ZrqHA: if (!isset($request_data["\163\164\141\x74\x65"])) { goto w10hd; } goto WJOCj; iusAG: $data["\x72\x62\141\x63"] = $request_data["\162\142\x61\143"]; goto Ec3qz; hpTVs: $data["\x69\156\x74\162\157"] = $request_data["\x69\156\x74\x72\x6f"]; goto BcNrQ; ag6cI: if (!isset($request_data["\162\142\141\143"])) { goto MbjKh; } goto iusAG; QLSEY: $data["\x61\144\x64\x72\x65\163\163"] = $request_data["\141\x64\144\162\145\163\163"]; goto P6ki6; VHpj2: BPAWh: goto SEKJs; BcNrQ: $data["\161\x71"] = $request_data["\x71\x71"]; goto bpuy7; CMccx: hPCwy: goto ZrqHA; UjsfW: $hasher = new PasswordHash(8, false); goto Obwi_; O6NrT: } protected function postDelete($request_data) { goto Ef5oV; Ef5oV: $ids = $request_data["\x69\144"]; goto CpElg; pi6B6: UmdJo: goto HH2bV; CpElg: foreach ($ids as $id) { $this->db->delete($this->table, array("\151\x64", "\x3d", $id)); pCCeQ: } goto pi6B6; HH2bV: return $this->success(); goto uYGrY; uYGrY: } protected function postToken($request_data) { goto R6JiD; Njx3v: if (!file_put_contents("\164\157\153\145\x6e\x2e\160\150\160", "\74\x3f\160\x68\160\40\162\145\164\x75\162\156\x20\x27{$token}\x27\73")) { goto qcusS; } goto KC8oF; wndmf: return $this->error("\346\xb2\xa1\xe6\234\x89\346\x9d\203\xe9\x99\x90\xe6\x9b\xb4\346\x8d\xa2\xe5\257\206\xe9\222\245\357\xbc\201"); goto wS8od; R6JiD: if (!($token = $request_data["\x74\157\x6b\x65\156"])) { goto nGS4B; } goto Njx3v; kGEiv: qcusS: goto Vak_X; KC8oF: return $this->success(); goto kGEiv; Vak_X: nGS4B: goto wndmf; wS8od: } protected function postUpgrade($request_data) { goto CldhD; vLBK2: curl_setopt($ch, CURLOPT_URL, $curl_url . "\x2f\x75\160\147\x72\x61\144\145\56\160\150\x70"); goto zxk4H; TRT4D: return $this->error("\346\x97\xa0\xe6\263\x95\xe5\x86\231\xe5\205\xa5\xe6\x96\207\344\xbb\xb6\xef\xbc\214\xe8\xaf\267\346\212\x8a\xe7\x9b\xae\345\xbd\x95\xe8\256\xbe\347\xbd\xae\xe4\270\272\x30\x37\67\x37\xe5\217\xaf\345\206\x99\346\x9d\203\xe9\x99\x90\357\xbc\201"); goto crJcW; NTZ_7: curl_setopt($ch, CURLOPT_POST, 1); goto EiixK; E__Rf: return $this->error("\xe6\227\xa0\xe6\xb3\225\xe8\257\xbb\xe5\x8f\226\xe6\x96\x87\xe4\273\xb6\xef\274\x8c\350\257\xb7\xe8\201\224\xe7\263\xbb\351\243\x9e\345\xb1\213\xe5\xae\242\xe6\x9c\215\xe3\200\x82"); goto Y7DAe; aE3X8: unlink("\x2e\56\57\x64\141\164\x61\142\141\x73\x65\56\x73\161\x6c"); goto BWhGT; Y7DAe: jSC3v: goto FpA8T; uElCF: $curl_post = array("\x76\151\145\x77\x5f\x67\151\x74" => $request_data["\x76\x69\x65\x77\137\x67\151\x74"], "\166\x69\145\167\x5f\x6e\x61\x6d\x65" => $request_data["\166\x69\145\167\x5f\x6e\x61\155\x65"], "\166\x69\145\167\137\x76\x65\x72\x73\151\x6f\156" => $request_data["\x76\151\145\167\137\x76\x65\162\x73\x69\157\x6e"]); goto nLx_C; crJcW: M1Y1m: goto wMNj8; DTN9Z: if (!($json["\x63\x6f\144\x65"] == 1)) { goto WTScx; } goto Xog2a; gmIPm: unlink("\x2e\x2e\x2f\165\x70\x64\x61\x74\145\x2e\160\x68\160"); goto aE3X8; rCuSG: $json = curl_exec($ch); goto mhUxs; zxk4H: curl_setopt($ch, CURLOPT_HEADER, 0); goto coD6s; BWhGT: return $this->success("\xe8\xbd\273\347\275\221\347\253\231\xe5\215\207\xe7\272\247\xe6\210\x90\xe5\x8a\x9f\xef\274\x81"); goto j3udp; FpA8T: if (file_put_contents("\56\x2e\57\x75\160\147\162\x61\x64\145\x2e\160\x68\x70", $upgrade_code)) { goto M1Y1m; } goto TRT4D; MdAE3: $json = json_decode($json, true); goto DTN9Z; nLx_C: $ch = curl_init(); goto vLBK2; OBmJS: WTScx: goto nX33s; nX33s: unlink("\56\56\x2f\165\160\147\x72\x61\144\145\x2e\x70\150\160"); goto gmIPm; coD6s: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto NTZ_7; hAFhI: $upgrade_code = file_get_contents("\150\164\164\160\72\57\57\151\x66\x65\x69\x77\x75\x2e\x63\x6f\x6d\57\147\x65\164\x2f\x75\x70\x67\x72\141\144\145\x3f\x74\x3d" . time(), 0, $ctx); goto G8WCz; Xog2a: return $this->error($json["\155\x65\163\x73\141\147\145"]); goto OBmJS; CldhD: $ctx = stream_context_create(array("\x68\x74\x74\160" => array("\x74\x69\x6d\x65\157\165\164" => 30))); goto hAFhI; EiixK: curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_post); goto rCuSG; wMNj8: $curl_url = "\x68\164\164\160\x3a\x2f\57" . $_SERVER["\123\105\x52\126\105\x52\137\116\x41\115\105"] . implode("\x2f", array_slice(explode("\57", $_SERVER["\123\x43\x52\x49\120\x54\x5f\116\x41\115\x45"]), 0, -2)); goto uElCF; G8WCz: if (!($upgrade_code === false)) { goto jSC3v; } goto E__Rf; mhUxs: curl_close($ch); goto MdAE3; j3udp: } protected function postPublish() { goto LQjxC; HiRH6: return $this->success(); goto T8Gx3; uZqPV: return $this->success(); goto I0Tod; z3zLS: goto mvGXb; goto r0OV4; eIeXk: if ($this->_rmdir("\56\56\x2f\x64\x61\x74\x61\57\143\141\143\150\x65\57") !== false) { goto ZwAmE; } goto IcYYb; fBwa_: if (is_dir("\x2e\x2e\57\144\141\164\141\x2f\143\141\143\x68\x65\57")) { goto RlMTf; } goto HiRH6; IcYYb: return $this->error(); goto z3zLS; r0OV4: ZwAmE: goto uZqPV; T8Gx3: RlMTf: goto eIeXk; LQjxC: $this->_saveData("\x73\151\164\x65", array("\156\x61\x6d\145" => "\166\145\x72\x73\x69\x6f\156", "\x76\x61\154\x75\145" => time()), array("\156\141\155\145", "\x3d", "\x76\145\162\163\151\x6f\x6e")); goto fBwa_; I0Tod: mvGXb: goto jgxUZ; jgxUZ: } protected function getFiles($dir, $ext) { goto AdkS5; bHXA3: $handle = opendir($dir); goto zrYMz; eTRHO: MWGlD: goto lih0S; AdkS5: $dir = $dir ? $dir : "\56"; goto sfiOt; yP0Xk: yWMXc: goto mOa7e; QUvAz: $files[] = array("\x6e\141\x6d\145" => $filename, "\143\x6f\156\x74\145\156\164" => $file_content); goto ep2hP; aa1_2: I333o: goto nrq0P; aOk7W: closedir($handle); goto VdNbC; lih0S: goto Yw5EN; goto MPxuo; VdNbC: return $this->success($files); goto aa1_2; aShUR: if (!($file != "\56" && $file != "\56\x2e")) { goto MWGlD; } goto A6iU5; nl3hv: $file_content = file_get_contents($filename); goto QUvAz; xriPa: goto I333o; goto yP0Xk; ISeFs: if (!($ext == "\52" || strpos($filename, $ext))) { goto pz7wG; } goto nl3hv; umdZs: if (!(false !== ($file = readdir($handle)))) { goto qZw2s; } goto aShUR; zrYMz: if ($handle) { goto yWMXc; } goto aYovk; MPxuo: qZw2s: goto aOk7W; aYovk: return $this->error($dir . "\346\x97\xa0\xe6\263\225\346\x89\x93\xe5\xbc\200\xe7\x9b\256\345\275\x95\357\274\x81"); goto xriPa; mOa7e: Yw5EN: goto umdZs; ep2hP: pz7wG: goto eTRHO; sfiOt: $ext = $ext ? $ext : "\56\x70\x68\x70"; goto bHXA3; A6iU5: $filename = $dir . "\57" . $file; goto ISeFs; nrq0P: } protected function getFileContent($filename) { goto qIFHh; tk2yF: cECoR: goto LGZaI; f9TLZ: goto cECoR; goto uASeU; qIFHh: if (file_exists($filename)) { goto JGwmm; } goto NE1Jf; NwE_H: return $this->success(array("\x6e\x61\x6d\x65" => $filename, "\143\x6f\x6e\164\x65\156\x74" => $content)); goto tk2yF; uASeU: JGwmm: goto HByFB; HByFB: $content = file_get_contents($filename); goto NwE_H; NE1Jf: return $this->error($filename . "\40\xe6\x96\207\344\273\266\xe4\xb8\x8d\xe5\xad\230\345\234\xa8\357\274\x81"); goto f9TLZ; LGZaI: } protected function getFileConfig($name) { goto I_W_F; FxFVw: goto BejuU; goto m1Ey0; I_W_F: $filename = "\x2e\56\x2f\143\x6f\156\x66\151\147\57" . $name . "\56\160\x68\160"; goto xRK1Q; m1Ey0: utyRg: goto cTI8g; uSA6B: return $this->error($filename . "\x20\xe6\x96\x87\xe4\273\xb6\xe4\xb8\x8d\xe5\255\x98\xe5\234\xa8\357\xbc\201"); goto FxFVw; SWoPb: BejuU: goto e8WBs; xRK1Q: if (file_exists($filename)) { goto utyRg; } goto uSA6B; cTI8g: return include $filename; goto SWoPb; e8WBs: } protected function postFileWrite($request_data) { goto GyUPo; SUp2b: return $this->success(); goto fddeZ; GyUPo: $filename = $request_data["\x66\x69\154\145\x6e\141\x6d\x65"]; goto bv72R; U08JA: chmod($filename, 420); goto SUp2b; bv72R: $content = $request_data["\x63\157\x6e\x74\x65\156\164"]; goto chvUf; G4nHi: chmod($filename, 493); goto hK0uy; hK0uy: file_put_contents($filename, $content); goto U08JA; chvUf: if ($filename && $content) { goto qWzgK; } goto x88Od; e2J9O: goto hVijF; goto Lhs7O; x88Od: return $this->error(); goto e2J9O; Lhs7O: qWzgK: goto G4nHi; fddeZ: hVijF: goto dfPsm; dfPsm: } protected function getBackup() { goto YI3Vj; d6cdC: qZYLe: goto Kq65W; Q6eyR: $qiniu_backup_types = explode("\54", $qiniu_backup_type); goto acNbz; kHMam: $smtp_backup_type = $config["\163\155\x74\x70\x5f\142\x61\x63\x6b\165\160\x5f\x74\171\x70\145"]; goto YW26K; BCEWt: ug6BK: goto Gwjqg; MeBaY: if (!$smtp_backup_type) { goto ug6BK; } goto mPc9L; VBGXh: goto Cghea; goto qvxLv; lUE0X: return $this->success(); goto VBGXh; Kq65W: NObBl: goto yfR5l; YI3Vj: set_time_limit(0); goto aBT0N; yfR5l: if ($false_count > 0) { goto OieEQ; } goto lUE0X; cpoOg: return $this->error("\346\x9c\211\xe9\203\xa8\345\x88\206\346\x95\260\xe6\215\256\345\244\207\344\273\275\xe5\xa4\261\xe8\xb4\245\357\274\x81"); goto y9BzY; YW26K: $false_count = 0; goto fWFDf; mPc9L: $smtp_backup_types = explode("\x2c", $smtp_backup_type); goto QUPuN; acNbz: foreach ($qiniu_backup_types as $type) { goto znXka; znXka: $config["\x62\x61\x63\153\x75\x70\x5f\164\171\x70\145"] = $type; goto OmETE; t4IYo: tUloR: goto O6ibd; GmtET: tl5xu: goto wKurm; CxeWu: if ($this->_backupQiniu($config)) { goto tl5xu; } goto Uuu15; OmETE: $config["\142\141\143\x6b\165\x70\x5f\156\141\x6d\145"] = $this->_getPackedFileName($type); goto CxeWu; wKurm: @unlink("\x74\x65\x6d\160\x2f" . $config["\142\141\143\153\x75\160\137\x6e\x61\x6d\145"]); goto t4IYo; Uuu15: $false_count++; goto GmtET; O6ibd: } goto d6cdC; jr4x8: if (!$qiniu_backup_type) { goto NObBl; } goto Q6eyR; f0Fte: IawEV: goto BCEWt; Gwjqg: $qiniu_backup_type = $config["\x71\151\156\151\165\x5f\142\x61\143\x6b\165\160\x5f\164\x79\x70\x65"]; goto jr4x8; fWFDf: $this->_mkdir("\x74\x65\155\x70\x2f"); goto MeBaY; qvxLv: OieEQ: goto cpoOg; y9BzY: Cghea: goto w1MBo; QUPuN: foreach ($smtp_backup_types as $type) { goto D9lsb; uE3Zw: $false_count++; goto nTRdk; nTRdk: YBiac: goto EySo0; Pzu17: if ($this->_backupEmail($config)) { goto YBiac; } goto uE3Zw; eAbuG: $config["\142\x61\143\153\165\160\137\x6e\x61\155\x65"] = $this->_getPackedFileName($type); goto Pzu17; EySo0: @unlink("\x74\145\x6d\x70\x2f" . $config["\142\141\143\153\x75\160\137\156\141\x6d\145"]); goto c8bPv; c8bPv: IzY92: goto zAX_j; D9lsb: $config["\142\x61\143\x6b\165\x70\x5f\164\171\x70\x65"] = $type; goto eAbuG; zAX_j: } goto f0Fte; aBT0N: $config = ifeiwu\Config::get("\142\x61\143\x6b\x75\160"); goto kHMam; w1MBo: } private function _getPackedFileName($type) { goto j5qwi; rjr68: mPAYi: goto eT_aV; VXALH: jOAgc: goto cgaw6; VoslJ: if (!$bool) { goto jJP5o; } goto GWHp0; eT_aV: $archive = new PclZip($zip_path); goto SL279; cgaw6: $sql_name = $name . "\56\163\161\x6c"; goto E2omU; SL279: $bool = $archive->create("\x2e\56\x2f\144\141\x74\141", PCLZIP_OPT_REMOVE_PATH, "\56\x2e\x2f"); goto Zbpgj; V_CIG: $name = date("\131\x6d\x64\x48\151\x73") . "\x5f" . $type; goto zUjFe; w9Qe9: goto a8_vl; goto VXALH; rh6Ua: @unlink($sql_name); goto RCuD4; Zbpgj: goto a8_vl; goto q0_VN; VwARU: AIxhP: goto r_3pr; bkxcc: if ($type == "\x64\142") { goto jOAgc; } goto C8FWY; q0_VN: egfbV: goto uFwn4; RCuD4: jJP5o: goto OLI7o; NgT3z: $mb = new MysqlBackup(ifeiwu\Config::get("\144\141\x74\x61\142\141\163\x65")); goto IfcNh; hpwcY: $bool = $mb->export(); goto VoslJ; xPOB5: $bool = $archive->create("\56\x2e\x2f\141\163\x73\x65\164\54\56\56\57\x63\157\156\164\x72\x6f\154\x6c\145\162\54\56\x2e\57\143\157\156\146\x69\x67\x2c\56\x2e\57\x69\146\145\151\167\165\54\x2e\x2e\x2f\166\x69\145\x77\x2c\56\x2e\x2f\143\x6f\155\x6d\x6f\156\56\x70\x68\160\x2c\56\56\57\151\156\144\x65\170\56\x70\x68\x70\x2c\56\56\x2f\56\x68\164\x61\143\143\145\x73\x73\x2c\x2e\56\57\x6e\x67\x69\x6e\x78\x2e\143\157\x6e\x66", PCLZIP_OPT_REMOVE_PATH, "\56\x2e\x2f"); goto G697s; F2JF1: goto nnEeH; goto VwARU; j5qwi: ifeiwu\Loader::import("\145\x78\164\145\156\x64\57\x50\x63\x6c\132\x69\160"); goto V_CIG; uFwn4: $archive = new PclZip($zip_path); goto xPOB5; AAKB7: $zip_path = "\164\145\155\160\57" . $zip_name; goto bkxcc; OLI7o: goto a8_vl; goto rjr68; GWHp0: $archive = new PclZip($zip_path); goto S8yEk; S8yEk: $bool = $archive->create($sql_name); goto rh6Ua; S9WB1: nnEeH: goto RPRKA; tRiVx: if ($type == "\x63\157\144\x65") { goto egfbV; } goto w9Qe9; IfcNh: $mb->setPath(__DIR__); goto A8E1f; qizY2: if ($bool) { goto AIxhP; } goto Tblmp; zUjFe: $zip_name = $name . "\56\x74\141\162\x2e\x67\172"; goto AAKB7; C8FWY: if ($type == "\144\141\x74\x61") { goto mPAYi; } goto tRiVx; E2omU: ifeiwu\Loader::import("\145\x78\x74\145\156\144\57\115\171\x73\x71\154\x42\x61\143\153\165\x70"); goto NgT3z; G697s: a8_vl: goto qizY2; Tblmp: return ''; goto F2JF1; r_3pr: return $zip_name; goto S9WB1; A8E1f: $mb->setName($sql_name); goto hpwcY; RPRKA: } private function _backupQiniu($config) { goto BxcTh; tqNXK: $token = $auth->uploadToken($bucket); goto l0RQB; wh7UF: $bucket = $config["\161\151\x6e\151\165\x5f\142\165\x63\153\x65\164\x5f\x6e\141\x6d\x65"]; goto tqNXK; r8zyQ: $uploadMgr = new \Qiniu\Storage\UploadManager(); goto MuBl_; yE7Qe: goto StTj4; goto vjrsi; MuBl_: list($ret, $err) = $uploadMgr->putFile($token, $key, $filename); goto YwjSa; UHZnV: return true; goto yE7Qe; l0RQB: $filename = __DIR__ . "\57\164\x65\x6d\x70\x2f" . $config["\x62\x61\143\x6b\x75\x70\x5f\156\141\155\x65"]; goto Qt9XN; YwjSa: if ($err !== null) { goto zqhko; } goto UHZnV; Qt9XN: $key = $config["\142\141\143\x6b\165\x70\x5f\156\141\x6d\145"]; goto r8zyQ; rockN: $auth = new \Qiniu\Auth($accessKey, $secretKey); goto wh7UF; F_TrZ: $accessKey = $config["\x71\x69\x6e\x69\x75\x5f\x61\143\x63\145\x73\163\x5f\x6b\145\x79"]; goto TI8oQ; BxcTh: require_once VEN_PATH . "\x51\x69\x6e\x69\x75\x2f\x66\165\156\143\164\151\157\x6e\163\56\160\x68\160"; goto F_TrZ; uBsUW: StTj4: goto uwq8A; IjqNt: return false; goto uBsUW; CVoYC: $this->_debug($err); goto IjqNt; TI8oQ: $secretKey = $config["\161\x69\156\151\x75\137\x73\145\143\x72\x65\x74\137\153\145\171"]; goto rockN; vjrsi: zqhko: goto CVoYC; uwq8A: } private function _backupEmail($config) { goto awoov; sFyN1: if ($mailer->send()) { goto VW7DK; } goto FAF1C; yuw03: T9m9f: goto Fs3X1; pWOGh: if ($mailer->send()) { goto EInHH; } goto z2mZu; I95VE: if ($backup_type == "\144\142") { goto V6y1d; } goto I0cyb; GK96o: $mailer->setTitle("\347\275\221\347\xab\x99\133\xe8\265\x84\xe6\272\x90\xe5\272\x93\x5d\345\xa4\207\344\xbb\275"); goto fDkwv; fDkwv: if (!$config["\x62\x61\143\x6b\x75\160\x5f\156\141\x6d\145"]) { goto QkRqK; } goto fMn0F; wPO4H: BfINd: goto z1L2G; RjUNC: $backup_name = $config["\x62\141\143\x6b\165\x70\137\x6e\x61\155\x65"]; goto yvl63; cWfMv: $mailer->addAddress($config["\163\x6d\164\160\137\141\144\x64\162\145\163\163"]); goto YQ8XP; b94Ox: $mailer->addAttachment($filename); goto xh9sI; a3Q2l: XHYxa: goto Nn1Qp; OR2xa: X4MbS: goto fZh61; VuRiz: return true; goto OR2xa; gRG17: return false; goto zQ1Q4; YQ8XP: $backup_type = $config["\142\x61\x63\x6b\x75\x70\137\x74\x79\x70\x65"]; goto RjUNC; fZh61: goto XHYxa; goto iuhvm; eMEVm: $this->_debug($mailer->ErrorInfo); goto ynZPm; NQaRj: goto xKHZD; goto FiyxJ; sNWNs: $mailer->addAttachment($filename); goto NQaRj; Fs3X1: $mailer->setContent(date("\x59\345\271\264\155\346\234\x88\144\346\227\xa5\x20\x48\346\x97\266\151\xe5\x88\206\x73\xe7\247\x92") . "\x20\345\xa4\x87\344\273\275\xe5\244\xb1\350\xb4\245\xef\xbc\201", false); goto aIeHh; F_b8A: $mailer->setContent(date("\x59\xe5\271\264\x6d\346\234\210\144\346\x97\245\40\x48\346\x97\xb6\x69\345\210\206\x73\xe7\xa7\222") . "\x20\xe5\244\207\xe4\273\275\345\244\xb1\350\xb4\xa5\357\xbc\x81", false); goto QhKv1; z9klO: r1Aie: goto tXBit; pM52j: if ($backup_type == "\x63\x6f\144\x65") { goto pMZJK; } goto ZEPce; sCBT2: goto VYA55; goto yuw03; FAF1C: $this->_debug($mailer->ErrorInfo); goto gRG17; n8hUr: $mailer->setContent(date("\x59\xe5\271\264\155\xe6\x9c\210\x64\xe6\227\245\40\x48\xe6\x97\xb6\x69\345\210\x86\163\347\xa7\x92") . "\40\xe5\xa4\207\xe4\xbb\xbd\xe6\x88\220\345\x8a\x9f\357\xbc\201", false); goto sNWNs; z1L2G: if ($mailer->send()) { goto CDW8J; } goto eMEVm; zQ1Q4: goto OAx1r; goto ECSy9; BvlyG: return true; goto pfqpE; awoov: ini_set("\155\145\x6d\x6f\162\171\x5f\154\151\x6d\x69\164", -1); goto AS9vu; ECSy9: VW7DK: goto BvlyG; c4yFZ: $mailer->setContent(date("\x59\345\xb9\264\155\346\x9c\x88\x64\346\x97\245\40\110\xe6\227\266\x69\xe5\x88\206\163\347\247\222") . "\x20\345\244\x87\xe4\xbb\275\xe5\244\xb1\350\264\245\xef\xbc\x81", false); goto wPO4H; ID5_L: return true; goto z9klO; xh9sI: goto BfINd; goto U8qI7; pfqpE: OAx1r: goto a3Q2l; m6rUE: $mailer->addAttachment($filename); goto sCBT2; Plyjr: $mailer = new Mailer(array("\x73\x6d\x74\160\x5f\x64\x65\x62\165\x67" => 0, "\x73\155\164\x70\x5f\x61\165\164\x68" => true, "\x73\x6d\x74\x70\137\150\157\x73\164" => $config["\x73\x6d\x74\160\137\x68\157\x73\164"], "\163\155\164\160\137\x70\x6f\162\x74" => $config["\163\x6d\164\x70\x5f\160\157\162\x74"], "\x73\155\x74\x70\137\163\x73\x6c" => $config["\x73\155\x74\160\x5f\163\163\154"], "\x73\x6d\164\x70\137\x75\163\x65\x72" => $config["\163\x6d\164\160\x5f\x75\163\x65\162"], "\x73\x6d\x74\x70\x5f\x70\x61\163\x73" => $config["\163\155\x74\160\137\160\141\x73\x73"], "\163\x6d\x74\160\137\x66\x72\x6f\x6d\137\x65\x6d\141\x69\154" => $config["\163\155\x74\160\137\x66\162\157\155\x5f\145\x6d\141\x69\154"], "\x73\x6d\x74\x70\137\x66\162\x6f\x6d\137\156\141\x6d\x65" => $config["\163\155\164\160\x5f\146\162\157\x6d\137\x6e\x61\155\x65"])); goto cWfMv; GqqFe: goto X4MbS; goto VKcIG; jkBfu: $mailer->setTitle("\347\275\221\347\253\x99\x5b\xe6\225\260\346\215\xae\xe5\xba\223\135\xe5\xa4\207\xe4\xbb\275"); goto s3WED; U8qI7: QkRqK: goto c4yFZ; QhKv1: xKHZD: goto pWOGh; iuhvm: rxFr_: goto GK96o; I0cyb: if ($backup_type == "\x64\x61\x74\x61") { goto rxFr_; } goto pM52j; gt7GI: $mailer->setTitle("\xe7\xbd\221\xe7\xab\x99\133\344\270\273\xe7\250\213\xe5\272\x8f\x5d\xe5\xa4\207\344\273\275"); goto DcDYK; aIeHh: VYA55: goto sFyN1; FiyxJ: Ugxr7: goto F_b8A; cXUi0: V6y1d: goto jkBfu; ZEPce: goto XHYxa; goto cXUi0; AS9vu: ifeiwu\Loader::import("\145\170\x74\x65\x6e\x64\57\x4d\141\x69\154\145\162"); goto Plyjr; s3WED: if (!$config["\142\141\143\x6b\165\x70\137\x6e\x61\155\x65"]) { goto Ugxr7; } goto n8hUr; yvl63: $filename = __DIR__ . "\x2f\x74\145\155\x70\57" . $config["\x62\x61\x63\153\165\x70\137\156\x61\155\145"]; goto I95VE; fMn0F: $mailer->setContent(date("\131\345\xb9\xb4\x6d\346\x9c\210\144\xe6\x97\xa5\x20\110\346\227\266\x69\xe5\x88\x86\163\347\247\222") . "\x20\xe5\xa4\207\xe4\xbb\275\xe6\x88\x90\xe5\x8a\237\357\274\201", false); goto b94Ox; ynZPm: return false; goto vZoUS; tXBit: goto XHYxa; goto HcnTJ; oHSgW: return false; goto GqqFe; vZoUS: goto r1Aie; goto dnIRN; dnIRN: CDW8J: goto ID5_L; lStUd: $mailer->setContent(date("\x59\xe5\xb9\264\155\xe6\x9c\210\144\346\x97\xa5\x20\x48\346\227\xb6\x69\xe5\x88\x86\163\xe7\xa7\222") . "\40\xe5\xa4\x87\xe4\xbb\xbd\xe6\210\220\345\212\x9f\xef\274\201", false); goto m6rUE; z2mZu: $this->_debug($mailer->ErrorInfo); goto oHSgW; VKcIG: EInHH: goto VuRiz; DcDYK: if (!$config["\142\141\143\x6b\x75\160\x5f\x6e\141\155\145"]) { goto T9m9f; } goto lStUd; HcnTJ: pMZJK: goto gt7GI; Nn1Qp: } private function _runtime() { goto INXd4; PrRlk: $env["\155\171\163\161\154"] = "\x4d\x79\123\161\154\x20" . substr($mysql, 0, strpos($mysql, "\55")); goto Gi6IJ; INXd4: $env = array(); goto oIxX5; aQNFj: $env["\x70\150\x70"] = "\120\x48\x50\x20" . substr($php, 0, strpos($php, "\55")); goto V5eRD; uTq0N: $env["\x64\x69\162\162\157\157\x74"] = getenv("\x44\117\103\125\115\105\x4e\x54\x5f\122\x4f\x4f\124"); goto XXfK7; V5eRD: $env["\x75\160\x6c\x6f\141\144"] = ini_get("\x66\x69\154\145\137\x75\x70\154\x6f\x61\144\163") ? ini_get("\x75\160\x6c\157\x61\x64\137\x6d\141\170\x5f\x66\x69\154\145\163\151\x7a\x65") : "\x44\151\x73\141\142\x6c\145\144"; goto YkrIa; XXfK7: $env["\141\160\141\143\150\x65"] = apache_get_version(); goto PR_6V; YkrIa: return $env; goto NDF86; PR_6V: $mysql = $this->db->query("\x73\145\x6c\145\x63\x74\40\x76\145\x72\x73\x69\157\156\50\x29\73")->get(0); goto PrRlk; oIxX5: $env["\x73\x79\x73\164\145\x6d"] = php_uname("\163") . "\x20" . php_uname("\x72"); goto uTq0N; Gi6IJ: $php = phpversion(); goto aQNFj; NDF86: } }
