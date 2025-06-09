<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <style>
        .inline-style-0 {font-family: 'BIZ UDPGothic', sans-serif; color: #464545}
        .inline-style-1 {padding-top: 30px; padding-bottom: 30px}
        .inline-style-2 {text-align: center; padding: 16px; margin-bottom: 10px}
        .inline-style-3 {font-size: 26px; line-height: 38px; font-weight: bold}
        .inline-style-4 {font-size: 14px; line-height: 24px;}
        .inline-style-5 {padding: 20px}
        .inline-style-6 {padding: 16px;}
        .inline-style-7 {width: 100%; display:flex;}
        .inline-style-8 {width: 65%; float: left;}
        .inline-style-9 {border-bottom: 1px solid #d1d1d1; line-height: 24px; padding-bottom: 6px;}
        .inline-style-10 {justify-content: space-between; min-width: 80px; font-size: 14px;}
        .inline-style-11 {padding-left: 16px; font-size: 16px; font-weight: bold;}
        .inline-style-12 {border-bottom: 1px solid #d1d1d1; line-height: 24px; padding-bottom: 6px}
        .inline-style-13 {display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px; font-weight: 400}
        .inline-style-14 {padding-left: 16px; font-size: 14px; font-weight: 700}
        .inline-style-15 {border-bottom: 1px solid #d1d1d1; line-height: 24px; padding-bottom: 6px}
        .inline-style-16 {display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px; font-weight: 400}
        .inline-style-17 {padding-left: 16px; font-size: 14px; font-weight: 700}
        .inline-style-18 {border-bottom: 1px solid #d1d1d1; line-height: 24px; padding-bottom: 6px}
        .inline-style-19 {display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px; font-weight: 400}
        .inline-style-20 {padding-left: 16px; font-size: 14px; font-weight: 700}
        .inline-style-21 {border-bottom: 1px solid #d1d1d1; line-height: 24px; padding-bottom: 6px}
        .inline-style-22 {display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px; font-weight: 400}
        .inline-style-23 {padding-left: 16px; font-size: 14px; font-weight: 700}
        .inline-style-24 {width: 30%; float: left; margin-left: 5%;}
        .inline-style-25 {margin-bottom: 18px}
        .inline-style-26 {width: 100%}
        .inline-style-27 {width: 100%}
        .inline-style-28 {display:block; line-height: 24px; font-size: 12px; color: #747474; font-weight: 400; width: 100%;}
        .inline-style-29 {padding: 16px; width: 100%;}
        .inline-style-30 {font-size: 18px; line-height: 27px; font-weight: 700; text-align: center;}
        .inline-style-31 {width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;}
        .inline-style-32 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-33 {margin-bottom: 21px}
        .inline-style-34 {margin-bottom: 10px; line-height: 24px}
        .inline-style-35 {font-size: 14px; font-weight: 700}
        .inline-style-36 {font-size: 12px; font-weight: 400}
        .inline-style-37 {font-size: 14px; font-weight: 700; line-height: 24px}
        .inline-style-38 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-39 {font-size: 14px; font-weight: 700; line-height: 24px}
        .inline-style-40 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-41 {width: 100%; margin-bottom: 20px; font-size: 14px;}
        .inline-style-41 tr {width: 100%;}
        .inline-style-41 thead {width: 100%;}
        .inline-style-42 {font-size: 12px; font-weight: 700; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-43 {height: 47px; background: #f1f1f1; width: 24%; display: inline-grid; align-items: center}
        .inline-style-44 {margin-top: -15px}
        .inline-style-45 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-46 {margin-top: -15px}
        .inline-style-47 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-48 {margin-top: -15px}
        .inline-style-49 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-50 {margin-top: -15px}
        .inline-style-51 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px;}
        .inline-style-52 {width: 25%; display: inline-grid; align-items: center; justify-content: center}
        .inline-style-53 {margin-top: -15px}
        .inline-style-54 {width: 25%; display: inline-grid; align-items: center; justify-content: center}
        .inline-style-55 {margin-top: -15px}
        .inline-style-56 {width: 25%}
        .inline-style-57 {
            min-height: 47px;
            display: flex;
            justify-content: center;
            gap: 0.25rem;
            white-space: nowrap;
            /* border-bottom: 1px solid #d1d1d1; */
            align-items: center;
        }
        .inline-style-58 {min-height: 47px; display: flex; justify-content: center; gap: 0.25rem; white-space: nowrap; align-items: center}
        .inline-style-59 {width: 25%}
        .inline-style-60 {
            min-height: 47px;
            display: flex;
            justify-content: end;
            gap: 0.25rem;
            white-space: nowrap;
            /* border-bottom: 1px solid #d1d1d1; */
            align-items: center;
        }
        .inline-style-61 {min-height: 47px; display: flex; justify-content: end; gap: 0.25rem; white-space: nowrap; align-items: center}
        .inline-style-62 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-63 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-64 {margin-top: -15px}
        .inline-style-65 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-66 {margin-top: -15px}
        .inline-style-67 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-68 {margin-top: -15px}
        .inline-style-69 {width: 25%; display: inline-grid; align-items: center; justify-content: end; min-height: 47px}
        .inline-style-70 {margin-top: -15px}
        .inline-style-71 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-72 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-73 {margin-top: -15px}
        .inline-style-74 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-75 {margin-top: -15px}
        .inline-style-76 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-77 {margin-top: -15px}
        .inline-style-78 {width: 25%; display: inline-grid; align-items: center; justify-content: end; min-height: 47px}
        .inline-style-79 {margin-top: -15px}
        .inline-style-80 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-81 {width: 100%; margin-bottom: 20px}
        .inline-style-82 {display: flex; flex-direction: row; font-size: 12px; font-weight: 700; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-83 {height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center}
        .inline-style-84 {margin-top: -15px}
        .inline-style-85 {height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center}
        .inline-style-86 {margin-top: -15px}
        .inline-style-87 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-88 {width: 50%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-89 {margin-top: -15px}
        .inline-style-90 {width: 50%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-91 {margin-top: -15px}
        .inline-style-92 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-93 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-94 {width: 100%; margin-bottom: 20px}
        .inline-style-95 {display: flex; flex-direction: row; font-size: 12px; font-weight: 700; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-96 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-97 {margin-top: -15px}
        .inline-style-98 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-99 {margin-top: -15px}
        .inline-style-100 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-101 {margin-top: -15px}
        .inline-style-102 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-103 {margin-top: -15px}
        .inline-style-104 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-105 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px; background-color: #f1f1f1}
        .inline-style-106 {margin-top: -15px}
        .inline-style-107 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-108 {margin-top: -15px}
        .inline-style-109 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-110 {margin-top: -15px}
        .inline-style-111 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-112 {margin-top: -15px}
        .inline-style-113 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-114 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px; background-color: #f1f1f1}
        .inline-style-115 {margin-top: -15px}
        .inline-style-116 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-117 {margin-top: -15px}
        .inline-style-118 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-119 {margin-top: -15px}
        .inline-style-120 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-121 {margin-top: -15px}
        .inline-style-122 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-123 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-124 {display: flex; align-items: center; font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-125 {width: 50%; background-color: #f1f1f1; border-bottom: 1px solid #d1d1d1; border-top: 1px solid #d1d1d1; font-weight: 700}
        .inline-style-126 {min-height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1}
        .inline-style-127 {margin-top: -15px}
        .inline-style-128 {min-height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1}
        .inline-style-129 {margin-top: -15px}
        .inline-style-130 {min-height: 47px; display: flex; align-items: center; justify-content: center}
        .inline-style-131 {margin-top: -15px}
        .inline-style-132 {width: 50%; border-bottom: 1px solid #d1d1d1; border-top: 1px solid #d1d1d1}
        .inline-style-133 {min-height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1}
        .inline-style-134 {margin-top: -15px}
        .inline-style-135 {min-height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1}
        .inline-style-136 {margin-top: -15px}
        .inline-style-137 {min-height: 47px; display: flex; align-items: center; justify-content: center}
        .inline-style-138 {margin-top: -15px}
        .inline-style-139 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-140 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-141 {margin-top: 10px; margin-bottom: 20px}
        .inline-style-142 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-143 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-144 {margin-top: 10px; margin-bottom: 20px}
        .inline-style-145 {padding: 16px; width: 100%;}
        .inline-style-146 {font-size: 18px; line-height: 27px; font-weight: 700; text-align: center;}
        .inline-style-147 {width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;}
        .inline-style-148 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-149 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-150 {font-size: 14px; font-weight: 700}
        .inline-style-151 {margin-top: 16px; margin-bottom: 20px}
        .inline-style-152 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-153 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-154 {font-size: 14px; font-weight: 700}
        .inline-style-155 {font-size: 14px; font-weight: 700}
        .inline-style-156 {font-size: 14px; font-weight: 700}
        .inline-style-157 {margin-top: 16px; margin-bottom: 20px}
        .inline-style-158 {padding: 16px; width: 100%;}
        .inline-style-159 {font-size: 18px; line-height: 27px; font-weight: 700; text-align: center;}
        .inline-style-160 {width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;}
        .inline-style-161 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-162 {font-size: 14px; font-weight: 700; line-height: 24px; margin-bottom: 16px}
        .inline-style-163 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-164 {font-size: 14px; font-weight: 400; line-height: 24px}
        .inline-style-165 {color: #009cf3}
        .inline-style-166 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-167 {font-size: 14px; font-weight: 400; line-height: 24px; margin-bottom: 16px}
        .inline-style-168 {padding: 16px; width: 100%;}
        .inline-style-169 {font-size: 18px; line-height: 27px; font-weight: 700; text-align: center;}
        .inline-style-170 {width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;}
        .inline-style-171 {font-size: 12px; font-weight: 400; line-height: 24px; margin-bottom: 10px}
        .inline-style-172 {width: 100%; margin-bottom: 20px}
        .inline-style-173 {display: flex; flex-direction: row; font-size: 12px; font-weight: 700; line-height: 24px; border-bottom: 1px solid #f1f1f1}
        .inline-style-174 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-175 {margin-top: -15px}
        .inline-style-176 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-177 {margin-top: -15px}
        .inline-style-178 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-179 {margin-top: -15px}
        .inline-style-180 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-181 {margin-top: -15px}
        .inline-style-182 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #f1f1f1}
        .inline-style-183 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-184 {margin-top: -15px; text-align: center}
        .inline-style-185 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-186 {margin-top: -15px}
        .inline-style-187 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-188 {margin-top: -15px}
        .inline-style-189 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-190 {margin-top: -15px}
        .inline-style-191 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-192 {width: 100%; margin-bottom: 10px}
        .inline-style-193 {display: flex; flex-direction: row; font-size: 12px; font-weight: 700; line-height: 24px; border-bottom: 1px solid #f1f1f1}
        .inline-style-194 {height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center}
        .inline-style-195 {margin-top: -15px; text-align: center}
        .inline-style-196 {height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center}
        .inline-style-197 {margin-top: -15px}
        .inline-style-198 {height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center}
        .inline-style-199 {margin-top: -15px}
        .inline-style-200 {height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center}
        .inline-style-201 {margin-top: -15px}
        .inline-style-202 {height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center}
        .inline-style-203 {margin-top: -15px}
        .inline-style-204 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-205 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-206 {margin-top: -15px; text-align: center}
        .inline-style-207 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-208 {margin-top: -15px}
        .inline-style-209 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-210 {margin-top: -15px}
        .inline-style-211 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-212 {margin-top: -15px}
        .inline-style-213 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-214 {margin-top: -15px}
        .inline-style-215 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-216 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-217 {margin-top: -15px; text-align: center}
        .inline-style-218 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-219 {margin-top: -15px}
        .inline-style-220 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-221 {margin-top: -15px}
        .inline-style-222 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-223 {margin-top: -15px}
        .inline-style-224 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-225 {margin-top: -15px}
        .inline-style-226 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-227 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-228 {margin-top: -15px; text-align: center}
        .inline-style-229 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-230 {margin-top: -15px}
        .inline-style-231 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-232 {margin-top: -15px}
        .inline-style-233 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-234 {margin-top: -15px}
        .inline-style-235 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-236 {margin-top: -15px}
        .inline-style-237 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-238 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-239 {margin-top: -15px; text-align: center}
        .inline-style-240 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-241 {margin-top: -15px}
        .inline-style-242 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-243 {margin-top: -15px}
        .inline-style-244 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-245 {margin-top: -15px}
        .inline-style-246 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-247 {margin-top: -15px}
        .inline-style-248 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-249 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-250 {margin-top: -15px; text-align: center}
        .inline-style-251 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-252 {margin-top: -15px}
        .inline-style-253 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-254 {margin-top: -15px}
        .inline-style-255 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-256 {margin-top: -15px}
        .inline-style-257 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-258 {margin-top: -15px}
        .inline-style-259 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-260 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-261 {margin-top: -15px; text-align: center}
        .inline-style-262 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-263 {margin-top: -15px}
        .inline-style-264 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-265 {margin-top: -15px}
        .inline-style-266 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-267 {margin-top: -15px}
        .inline-style-268 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-269 {margin-top: -15px}
        .inline-style-270 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-271 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-272 {margin-top: -15px; text-align: center}
        .inline-style-273 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-274 {margin-top: -15px}
        .inline-style-275 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-276 {margin-top: -15px}
        .inline-style-277 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-278 {margin-top: -15px}
        .inline-style-279 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-280 {margin-top: -15px}
        .inline-style-281 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-282 {
            padding: 0 16px;
            width: 20%;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            background-color: #f1f1f1;
        }
        .inline-style-283 {margin-top: -15px; text-align: center}
        .inline-style-284 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-285 {margin-top: -15px}
        .inline-style-286 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-287 {margin-top: -15px}
        .inline-style-288 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-289 {margin-top: -15px}
        .inline-style-290 {width: 20%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-291 {margin-top: -15px}
        .inline-style-292 {font-size: 12px; font-weight: 400; line-height: 24px}
        .inline-style-293 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-294 {font-size: 12px; font-weight: 400; line-height: 24px; margin-bottom: 20px}
        .inline-style-295 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-296 {width: 100%; margin-bottom: 20px}
        .inline-style-297 {display: flex; flex-direction: row; font-size: 12px; font-weight: 700; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-298 {height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center}
        .inline-style-299 {margin-top: -15px}
        .inline-style-300 {height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center}
        .inline-style-301 {margin-top: -15px}
        .inline-style-302 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-303 {width: 50%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-304 {margin-top: -15px}
        .inline-style-305 {width: 50%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-306 {margin-top: -15px}
        .inline-style-307 {padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: 700; border-left: 4px solid #009cf3;}
        .inline-style-308 {width: 100%; margin-bottom: 20px}
        .inline-style-309 {display: flex; flex-direction: row; font-size: 12px; font-weight: 700; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-310 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-311 {margin-top: -15px}
        .inline-style-312 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-313 {margin-top: -15px}
        .inline-style-314 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-315 {margin-top: -15px}
        .inline-style-316 {height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center}
        .inline-style-317 {margin-top: -15px}
        .inline-style-318 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-319 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-320 {margin-top: -15px}
        .inline-style-321 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-322 {margin-top: -15px}
        .inline-style-323 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-324 {margin-top: -15px}
        .inline-style-325 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-326 {margin-top: -15px}
        .inline-style-327 {display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1}
        .inline-style-328 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-329 {margin-top: -15px}
        .inline-style-330 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-331 {margin-top: -15px}
        .inline-style-332 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-333 {margin-top: -15px}
        .inline-style-334 {width: 25%; display: inline-grid; align-items: center; justify-content: center; min-height: 47px}
        .inline-style-335 {margin-top: -15px}
    </style>
</head>
<body>
    <div class="inline-style-0">
        <div class="inline-style-1">
            <div class="inline-style-2">
                <h1 class="inline-style-3">ご契約内容通知書</h1>
                <p class="inline-style-4">※契約内容に関する重要なお知らせです。十分にお読みください。</p>
            </div>
            <div class="inline-style-5">
                <div class="inline-style-6">
                    <div class="inline-style-7">
                        <div align="left" class="inline-style-8">
                            <div class="inline-style-9">
                                <span class="inline-style-10">契約事業者<span>：</span></span>
                                <span class="inline-style-11">H.I.S.Mobile株式会社</span>
                            </div>
                            <div class="inline-style-12">
                                <span class="inline-style-13">契約番号<span>：</span></span>
                                <span class="inline-style-14">1</span>
                            </div>
                            <div class="inline-style-15">
                                <span class="inline-style-16">契約日<span>：</span></span>
                                <span class="inline-style-17">2024/10/07</span>
                            </div>
                            <div class="inline-style-18">
                                <span class="inline-style-19">契約者名<span>：</span></span>
                                <span class="inline-style-20">田中太郎</span>
                            </div>
                            <div class="inline-style-21">
                                <span class="inline-style-22">住所<span>：</span></span>
                                <span class="inline-style-23">〒261-0004 千葉県千葉市美浜区高洲４－１－１</span>
                            </div>
                        </div>
                        <div align="left" class="inline-style-24">
                            <div class="inline-style-25">
                                <img alt="qr_code" class="inline-style-26" src="{{ $qr }}"/>
                            </div>
                            <div>
                                <img alt="qr_code" class="inline-style-27" src="{{ $qr }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="inline-style-28">
                        <p>お客様の契約を特定する情報です。</p>
                        <p>お問い合わせの際には上記電話番号を担当者にお伝えください。</p>
                    </div>
                    <div class="inline-style-29">
                        <h2 class="inline-style-30">主要なサービスの内容・料金</h2>
                        <div class="inline-style-31"></div>
                    </div>
                    <div>
                        <p class="inline-style-32">主要なサービスの内容</p>
                    </div>
                    <div class="inline-style-33">
                        <div class="inline-style-34">
                            <p class="inline-style-35">自由自在290プラン 7GB (ドコモ回線)</p>
                            <p class="inline-style-36">※サービス内容の詳細は別紙資料をご確認ください。</p>
                        </div>
                        <p class="inline-style-37">初期手数料 ： 3,300円</p>
                    </div>
                    <div>
                        <p class="inline-style-38">月額基本料</p>
                    </div>
                    <p class="inline-style-39">プラン名 ： 自由自在290プラン</p>
                    <div class="inline-style-40">
                        <p>本商品の月額基本料は、当該料金月（暦月ではなく、開通日を起算日とする1ヶ月間をいいます）に選択されているデータ通信プランに応じて、以下のいずれかの金額を翌料金月の初日に課金します。</p>
                        <p>なお、上限1GBプランについては、データ通信使用量に応じたいずれかの金額を課金します。</p>
                        <p>※「20GBプラン」および「50GBプラン」の月額基本料には、無料通話分（1回あたり5分までの国内通話料）が含まれています。</p>
                    </div>
                    <table class="table-template inline-style-41">
                        <thead>
                            <tr class="inline-style-42">
                                <th class="inline-style-43" id="0">
                                    <p class="inline-style-44">データ通信プラン</p>
                                </th>
                                <th class="inline-style-45" id="1">
                                    <p class="inline-style-46">基準データ通信量</p>
                                </th>
                                <th class="inline-style-47" id="2">
                                    <p class="inline-style-48">データ通信使用量</p>
                                </th>
                                <th class="inline-style-49" id="3">
                                    <p class="inline-style-50">月額基本料</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="inline-style-51">
                                <td class="inline-style-52" style="text-align: center;">
                                    <p class="inline-style-53">上限1GBプラン</p>
                                </td>
                                <td class="inline-style-54" style="text-align: center;">
                                    <p class="inline-style-55">1GB (1,000MB)</p>
                                </td>
                                <td class="inline-style-56" style="text-align: center;">
                                    <div class="inline-style-57">100MBまで</div>
                                    {{-- <div class="inline-style-58">1GB (1,000MB)まで</div> --}}
                                </td>
                                <td class="inline-style-59" style="text-align: center;">
                                    <div class="inline-style-60">290円</div>
                                    {{-- <div class="inline-style-61">550円</div> --}}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right; padding-right: 50px;">
                                    <div class="inline-style-58">1GB (1,000MB)まで</div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="inline-style-61">550円</div>
                                </td>
                            </tr>
                            <tr class="inline-style-62">
                                <td class="inline-style-63" style="text-align: center;">
                                    <p class="inline-style-64">3GBプラン</p>
                                </td>
                                <td class="inline-style-65" style="text-align: center;">
                                    <p class="inline-style-66">3GB (3,000MB)</p>
                                </td>
                                <td class="inline-style-67" style="text-align: center;">
                                    <p class="inline-style-68">ー</p>
                                </td>
                                <td class="inline-style-69" style="text-align: center;">
                                    <p class="inline-style-70">770円</p>
                                </td>
                            </tr>
                            <tr class="inline-style-71">
                                <td class="inline-style-72" style="text-align: center;">
                                    <p class="inline-style-73">7GBプラン</p>
                                </td>
                                <td class="inline-style-74" style="text-align: center;">
                                    <p class="inline-style-75">7GB (7,000MB)</p>
                                </td>
                                <td class="inline-style-76" style="text-align: center;">
                                    <p class="inline-style-77">ー</p>
                                </td>
                                <td class="inline-style-78" style="text-align: center;">
                                    <p class="inline-style-79">990円</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                    <p class="inline-style-80">通話料</p>
                    </div>
                    <table class="inline-style-81">
                        <thead>
                            <tr class="inline-style-82">
                            <th class="inline-style-83" id="0">
                            <p class="inline-style-84">通話種別</p>
                            </th>
                            <th class="inline-style-85" id="1">
                            <p class="inline-style-86">月額基本料</p>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="inline-style-87">
                            <td class="inline-style-88" rowspan="2">
                            <p class="inline-style-89">国内通話（一部の場合を除きます）</p>
                            </td>
                            <td class="inline-style-90" rowspan="2">
                            <p class="inline-style-91">9.0円 / 30秒</p>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <p class="inline-style-92">通話定額オプション</p>
                    </div>
                    <p class="inline-style-93">※一方的または機械的な発信等に該当する国内通話には22.0円/30秒の通話料を適用します。また、一定の電話番号に発信する国内通話、国際ローミングおよび国際電話には所定の通話料が発生します。詳細は別紙資料をご確認ください。</p>
                    <table class="inline-style-94">
                        <thead>
                            <tr class="inline-style-95">
                            <th class="inline-style-96" id="0">
                            <p class="inline-style-97">オプション名</p>
                            </th>
                            <th class="inline-style-98" id="1">
                            <p class="inline-style-99">適用日</p>
                            </th>
                            <th class="inline-style-100" id="2">
                            <p class="inline-style-101">月額基本料</p>
                            </th>
                            <th class="inline-style-102" id="3">
                            <p class="inline-style-103">上限金額</p>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="inline-style-104">
                            <td class="inline-style-105">
                            <p class="inline-style-106">完全かけ放題</p>
                            </td>
                            <td class="inline-style-107">
                            <p class="inline-style-108">YYYY/MM/DD</p>
                            </td>
                            <td class="inline-style-109">
                            <p class="inline-style-110">1,480円</p>
                            </td>
                            <td class="inline-style-111">
                            <p class="inline-style-112">有</p>
                            </td>
                            </tr>
                            <tr class="inline-style-113">
                            <td class="inline-style-114">
                            <p class="inline-style-115">通話5分定額</p>
                            </td>
                            <td class="inline-style-116">
                            <p class="inline-style-117">ー</p>
                            </td>
                            <td class="inline-style-118">
                            <p class="inline-style-119">1,500円</p>
                            </td>
                            <td class="inline-style-120">
                            <p class="inline-style-121">ー</p>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <p class="inline-style-122">SMS</p>
                    </div>
                    <div class="inline-style-123">
                        <p>SMSの送信には以下の料金が発生します（SMSの受信は無料です）。</p>
                        <p>※1 送信文字数に応じて異なります。</p>
                    </div>
                    <div class="inline-style-124">
                        <div class="inline-style-125">
                            <div class="inline-style-126">
                                <p class="inline-style-127">日本国内から日本国内へのSMS送信</p>
                            </div>
                            <div class="inline-style-128">
                                <p class="inline-style-129">日本国内から日本国外へのSMS送信</p>
                            </div>
                            <div class="inline-style-130">
                                <p class="inline-style-131">日本国外からのSMS送信</p>
                            </div>
                        </div>
                        <div class="inline-style-132">
                            <div class="inline-style-133">
                                <p class="inline-style-134">3～33円 ※１</p>
                            </div>
                            <div class="inline-style-135">
                                <p class="inline-style-136">50円～500円[非課税] ※１</p>
                            </div>
                            <div class="inline-style-137">
                            <p class="inline-style-138">100円[非課税]</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="inline-style-139">ユニバーサルサービス料</p>
                    </div>
                    <div class="inline-style-140">
                        <p>※詳細は別紙資料をご確認ください。</p>
                        <p class="inline-style-141">2.0円 （2024年10月現在）</p>
                    </div>
                    <div>
                        <p class="inline-style-142">電話リレーサービス料</p>
                    </div>
                    <div class="inline-style-143">
                        <p>※詳細は別紙資料をご確認ください。</p>
                        <p class="inline-style-144">1.0円 （2024年10月現在）</p>
                    </div>
                    <div class="inline-style-145">
                        <h2 class="inline-style-146">料金の支払い時期に関する説明</h2>
                        <div class="inline-style-147"></div>
                    </div>
                    <div>
                        <p class="inline-style-148">決済方法</p>
                    </div>
                    <div class="inline-style-149">
                        <p class="inline-style-150">お申込み時にご登録いただいたクレジットカードによる決済</p>
                        <p class="inline-style-151">※詳細は別紙資料をご確認ください。</p>
                    </div>
                    <div>
                        <p class="inline-style-152">支払日</p>
                    </div>
                    <div class="inline-style-153">
                        <p class="inline-style-154">開通日が毎月の課金日となります。</p>
                        <p class="inline-style-155">開通日が31日の場合、毎月末日が課金日となります。</p>
                        <p class="inline-style-156">開通日が29日/30日の場合、2月の課金日は末日となります。</p>
                        <p class="inline-style-157">※詳細は別紙資料をご確認ください。</p>
                    </div>
                    <div class="inline-style-158">
                        <h2 class="inline-style-159">契約変更・解約の条件等</h2>
                        <div class="inline-style-160"></div>
                    </div>
                    <div>
                        <p class="inline-style-161">解約の条件</p>
                    </div>
                    <div class="inline-style-162">
                        <p>解約はいつでも可能です。</p>
                        <p>最低利用期間および解約金はありません。</p>
                        <p>※付帯オプションなどをご契約している場合は、「契約内容の確認・変更」から解約のお手続きをお願いします。</p>
                    </div>
                    <div>
                        <p class="inline-style-163">契約変更・解約の方法</p>
                    </div>
                <div class="inline-style-164">
                    <p>My HISモバイル（<a class="inline-style-165" href="https://my.his-mobile.com">https://my.his-mobile.com</a>）の「解約」よりお申込みください。</p>
                    <p>MNP（携帯電話番号ポータビリティ）により他の携帯電話事業者に転出する場合には、MNP予約番号が必要です。</p>
                    <p>MNP予約番号の発行はMy HISモバイルからお申込みください。</p>
                    <p>※My HISモバイルのログインにはご登録されたHISモバイル ID(メールアドレス)とパスワードが必要です。</p>
                </div>
                <div>
                    <p class="inline-style-166">初期契約解除制度の適用の有無</p>
                </div>
                <div class="inline-style-167">本契約により提供する通信サービスには、初期契約解除制度の適用があります。開通日から起算して８日が経過するまでの間、当社に書面または当社所定の方法で通知することにより、本商品の利用契約を解除することができます。初期契約解除の詳細は別紙資料をご確認ください。
                </div>
                <div class="inline-style-168">
                    <h2 class="inline-style-169">オプションサービス・その他</h2>
                    <div class="inline-style-170"></div>
                </div>
                <div>
                    <p class="inline-style-171">※詳細は別紙資料をご確認ください。</p>
                    <table class="inline-style-172">
                        <thead>
                            <tr class="inline-style-173">
                            <th class="inline-style-174" id="0">
                            <p class="inline-style-175">オプション名</p>
                            </th>
                            <th class="inline-style-176" id="1">
                            <p class="inline-style-177">適用日</p>
                            </th>
                            <th class="inline-style-178" id="2">
                            <p class="inline-style-179">月額基本料</p>
                            </th>
                            <th class="inline-style-180" id="3">
                            <p class="inline-style-181">設定有無</p>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="inline-style-182">
                            <td class="inline-style-183">
                            <p class="inline-style-184">i-フィルター for マルチデバイス</p>
                            </td>
                            <td class="inline-style-185">
                            <p class="inline-style-186">ー</p>
                            </td>
                            <td class="inline-style-187">
                            <p class="inline-style-188">396円</p>
                            </td>
                            <td class="inline-style-189">
                            <p class="inline-style-190">無</p>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p class="inline-style-191">音声オプション※1</p>
                </div>
                <div>
                    <table class="inline-style-192">
                        <thead>
                            <tr class="inline-style-193">
                            <th class="inline-style-194" id="0">
                            <p class="inline-style-195">オプション名</p>
                            </th>
                            <th class="inline-style-196" id="1">
                            <p class="inline-style-197">適用日</p>
                            </th>
                            <th class="inline-style-198" id="2">
                            <p class="inline-style-199">月額基本料</p>
                            </th>
                            <th class="inline-style-200" id="3">
                            <p class="inline-style-201">上限金額</p>
                            </th>
                            <th class="inline-style-202" id="4">
                            <p class="inline-style-203">設定有無</p>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="inline-style-204">
                            <td class="inline-style-205">
                            <p class="inline-style-206">キャッチホン</p>
                            </td>
                            <td class="inline-style-207">
                            <p class="inline-style-208">ー</p>
                            </td>
                            <td class="inline-style-209">
                            <p class="inline-style-210">275円</p>
                            </td>
                            <td class="inline-style-211">
                            <p class="inline-style-212">ー</p>
                            </td>
                            <td class="inline-style-213">
                            <p class="inline-style-214">無</p>
                            </td>
                            </tr>
                            <tr class="inline-style-215">
                            <td class="inline-style-216">
                            <p class="inline-style-217">留守番電話</p>
                            </td>
                            <td class="inline-style-218">
                            <p class="inline-style-219">ー</p>
                            </td>
                            <td class="inline-style-220">
                            <p class="inline-style-221">385円</p>
                            </td>
                            <td class="inline-style-222">
                            <p class="inline-style-223">ー</p>
                            </td>
                            <td class="inline-style-224">
                            <p class="inline-style-225">無</p>
                            </td>
                            </tr>
                            <tr class="inline-style-226">
                            <td class="inline-style-227">
                            <p class="inline-style-228">転送電話</p>
                            </td>
                            <td class="inline-style-229">
                            <p class="inline-style-230">ー</p>
                            </td>
                            <td class="inline-style-231">
                            <p class="inline-style-232">0円 ※2</p>
                            </td>
                            <td class="inline-style-233">
                            <p class="inline-style-234">0円（利用不可）</p>
                            </td>
                            <td class="inline-style-235">
                            <p class="inline-style-236">無</p>
                            </td>
                            </tr>
                            <tr class="inline-style-237">
                            <td class="inline-style-238">
                            <p class="inline-style-239">国際ローミング</p>
                            </td>
                            <td class="inline-style-240">
                            <p class="inline-style-241">ー</p>
                            </td>
                            <td class="inline-style-242">
                            <p class="inline-style-243">0円 ※3</p>
                            </td>
                            <td class="inline-style-244">
                            <p class="inline-style-245">0円（利用不可）</p>
                            </td>
                            <td class="inline-style-246">
                            <p class="inline-style-247">無</p>
                            </td>
                            </tr>
                            <tr class="inline-style-248">
                            <td class="inline-style-249">
                            <p class="inline-style-250">国際電話</p>
                            </td>
                            <td class="inline-style-251">
                            <p class="inline-style-252">ー</p>
                            </td>
                            <td class="inline-style-253">
                            <p class="inline-style-254">275円</p>
                            </td>
                            <td class="inline-style-255">
                            <p class="inline-style-256">ー</p>
                            </td>
                            <td class="inline-style-257">
                            <p class="inline-style-258">無</p>
                            </td>
                            </tr>
                            <tr class="inline-style-259">
                            <td class="inline-style-260">
                            <p class="inline-style-261">留守番電話・キャッチホンパック</p>
                            </td>
                            <td class="inline-style-262">
                            <p class="inline-style-263">ー</p>
                            </td>
                            <td class="inline-style-264">
                            <p class="inline-style-265">275円</p>
                            </td>
                            <td class="inline-style-266">
                            <p class="inline-style-267">ー</p>
                            </td>
                            <td class="inline-style-268">
                            <p class="inline-style-269">無</p>
                            </td>
                            </tr>
                            <tr class="inline-style-270">
                            <td class="inline-style-271">
                            <p class="inline-style-272">完全かけ放題オプション</p>
                            </td>
                            <td class="inline-style-273">
                            <p class="inline-style-274">ー</p>
                            </td>
                            <td class="inline-style-275">
                            <p class="inline-style-276">275円</p>
                            </td>
                            <td class="inline-style-277">
                            <p class="inline-style-278">ー</p>
                            </td>
                            <td class="inline-style-279">
                            <p class="inline-style-280">無</p>
                            </td>
                            </tr>
                            <tr class="inline-style-281">
                            <td class="inline-style-282">
                            <p class="inline-style-283">通話５分定額オプション</p>
                            </td>
                            <td class="inline-style-284">
                            <p class="inline-style-285">ー</p>
                            </td>
                            <td class="inline-style-286">
                            <p class="inline-style-287">275円</p>
                            </td>
                            <td class="inline-style-288">
                            <p class="inline-style-289">ー</p>
                            </td>
                            <td class="inline-style-290">
                            <p class="inline-style-291">無</p>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="inline-style-292">
                        <p>※1 音声オプションサービスは、My HISモバイルでお申込みください。</p>
                        <p>※2 転送先への通話料は別途かかります。</p>
                        <p>※3 国際電話の通話料は別途かかります。</p>
                        <p>※4 発信した通話の通話料は別途かかります。</p>
                        <p>※5 留守番電話とキャッチホンがまとめてご利用いただけます</p>
                        <p>※6 完全かけ放題オプションの詳細は、別紙資料をご確認ください。</p>
                        <p>※7 通話5分定額オプションの詳細は、別紙資料をご確認ください。</p>
                    </div>
                </div>
                <div>
                    <p class="inline-style-293">5Gオプション</p>
                </div>
                <div class="inline-style-294">
                    <p>切り替えできる回数は1日につき、4Gから5G、5Gから4Gへの切り替えはそれぞれ一回ずつになります。</p>
                    <p>切り替えは無料です。</p>
                </div>
                <div>
                    <p class="inline-style-295">データオプション</p>
                </div>
                <table class="inline-style-296">
                    <thead>
                        <tr class="inline-style-297">
                        <th class="inline-style-298" id="0">
                        <p class="inline-style-299">データチャージ量</p>
                        </th>
                        <th class="inline-style-300" id="1">
                        <p class="inline-style-301">料金</p>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-style-302">
                        <td class="inline-style-303" rowspan="2">
                        <p class="inline-style-304">1G</p>
                        </td>
                        <td class="inline-style-305" rowspan="2">
                        <p class="inline-style-306">200円</p>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <p class="inline-style-307">その他割引条件</p>
                </div>
                <table class="inline-style-308">
                    <thead>
                        <tr class="inline-style-309">
                        <th class="inline-style-310" id="0">
                        <p class="inline-style-311">クーポンコード</p>
                        </th>
                        <th class="inline-style-312" id="1">
                        <p class="inline-style-313">クーポン種類</p>
                        </th>
                        <th class="inline-style-314" id="2">
                        <p class="inline-style-315">クーポン種類</p>
                        </th>
                        <th class="inline-style-316" id="3">
                        <p class="inline-style-317">割引額</p>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-style-318">
                        <td class="inline-style-319">
                        <p class="inline-style-320">XXXXXXXXXXXXXXX</p>
                        </td>
                        <td class="inline-style-321">
                        <p class="inline-style-322">商品のクーポン</p>
                        </td>
                        <td class="inline-style-323">
                        <p class="inline-style-324">定額</p>
                        </td>
                        <td class="inline-style-325">
                        <p class="inline-style-326">1,000円</p>
                        </td>
                        </tr>
                        <tr class="inline-style-327">
                        <td class="inline-style-328">
                        <p class="inline-style-329">YYYYYYYYYYYYYYYY</p>
                        </td>
                        <td class="inline-style-330">
                        <p class="inline-style-331">事務手数料</p>
                        </td>
                        <td class="inline-style-332">
                        <p class="inline-style-333">低率</p>
                        </td>
                        <td class="inline-style-334">
                        <p class="inline-style-335">１０％</p>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>