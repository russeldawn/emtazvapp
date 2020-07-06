<template>
	<div>
		<a-form
			ref="ruleForm"
			:model="form"
			:rules="rules"
		>

			<a-row :gutter="18">
				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>
					<a-form-item ref="name" label="1. Application Number" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item label="2. Date Applied" required prop="date1" :colon="true">
						<a-date-picker
							v-model="form.date1"
							show-time
							type="date"
							placeholder="Pick a date"
							style="width: 100%;"
						/>
					</a-form-item>

					<a-form-item ref="name" label="3. Name of Applicant" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="4. Company Name" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="5. Name of Authorized Representative" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="6. Address of Corporation" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="7. Property Identification Number(PIN)" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="8. Property Class" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item label="9. Type of Project" prop="region" :colon="true">
						<a-select
							v-model="form.region"
							placeholder="please select your zone"
						>
							<a-select-option value="shanghai">Zone one</a-select-option>
							<a-select-option value="beijing">Zone two</a-select-option>
						</a-select>
					</a-form-item>

					<a-form-item label="10. Allowable Projects (If others, please specify)" prop="region" :colon="true">
						<a-select
							v-model="form.region"
							placeholder="please select your zone"
						>
							<a-select-option value="shanghai">Zone one</a-select-option>
							<a-select-option value="beijing">Zone two</a-select-option>
						</a-select>
					</a-form-item>

					<a-form-item label="11. Nature of Projects (If others, please specify)" prop="region" :colon="true">
						<a-select
							v-model="form.region"
							placeholder="please select your zone"
						>
							<a-select-option value="shanghai">Zone one</a-select-option>
							<a-select-option value="beijing">Zone two</a-select-option>
						</a-select>
					</a-form-item>

				</a-col>

				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>



					<a-form-item ref="name" label="12. Location of Project" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="13. Floor area of project occupied" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
							placeholder="(in square meters)"
						/>
					</a-form-item>

					<a-form-item ref="name" label="14. Land area of project" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
							placeholder="(in square meters)"
						/>
					</a-form-item>

					<a-form-item label="15. Right over land (If others, please specify)" prop="region" :colon="true">
						<a-select
							v-model="form.region"
							placeholder="please select your zone"
						>
							<a-select-option value="shanghai">Zone one</a-select-option>
							<a-select-option value="beijing">Zone two</a-select-option>
						</a-select>
					</a-form-item>

					<a-form-item ref="name" label="16. Project Tenure" prop="name" :colon="true">
						<a-input-group>
							<a-row :gutter="18">

								<a-col :span="12">
									<a-select default-value="Option1" style="width: 100%;">
										<a-select-option value="Option1">
										Option1
										</a-select-option>
										<a-select-option value="Option2">
										Option2
										</a-select-option>
									</a-select>
								</a-col>

								<a-col :span="12">
									<a-input default-value="" placeholder="Years"/>
								</a-col>

							</a-row>
						</a-input-group>
					</a-form-item>

					<a-form-item label="17. Barangay of project site" prop="region" :colon="true">
						<a-select
							v-model="form.region"
							placeholder="please select your zone"
						>
							<a-select-option value="shanghai">Zone one</a-select-option>
							<a-select-option value="beijing">Zone two</a-select-option>
						</a-select>
					</a-form-item>

					<a-form-item label="18. Preferred mode of release of decision" prop="region" :colon="true">
						<a-select
							v-model="form.region"
							placeholder="please select your zone"
						>
							<a-select-option value="shanghai">Zone one</a-select-option>
							<a-select-option value="beijing">Zone two</a-select-option>
						</a-select>
					</a-form-item>

					<a-form-item ref="name" label="19. Project Cost/Capitalization" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
							placeholder="in pesos, write in words and in this field"
						/>
					</a-form-item>

					<a-form-item ref="name" label="20. Tax Declaration Number" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="21. LZBA Declaration Number" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item :colon="true">

						<p>
							{{ '22. ' + question22 }}
						</p>

						<a-radio-group v-decorator="['radio-button']">

							<a-radio value="a">
								Yes
							</a-radio>

							<a-radio value="b">
								No
							</a-radio>

						</a-radio-group>

					</a-form-item>


				</a-col>

				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>



					<a-form-item ref="name" prop="name" :colon="true">

						<p>
							If question 22 is "Yes", Please answer the following:
						</p>

						<p>
							22.a Name of HLURB Office/Zoning Administrator who issued the notice
						</p>

						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item label="22.b Date of notice issued" required prop="date1" :colon="true">
						<a-date-picker
							v-model="form.date1"
							show-time
							type="date"
							placeholder="Pick a date"
							style="width: 100%;"
						/>
					</a-form-item>

					<a-form-item :colon="true">

						<p>
							{{ '23. ' + question23 }}
						</p>

						<a-radio-group v-decorator="['radio-button']">

							<a-radio value="a">
								Yes
							</a-radio>

							<a-radio value="b">
								No
							</a-radio>

						</a-radio-group>

					</a-form-item>

					<a-form-item ref="name" prop="name" :colon="true">

						<p>
							23.a Other HLURB Office(s) where similar application(s) was/were filed:
						</p>

						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item label="23.b Date of notice issued" required prop="date1" :colon="true">
						<a-date-picker
							v-model="form.date1"
							show-time
							type="date"
							placeholder="Pick a date"
							style="width: 100%;"
						/>
					</a-form-item>

					<a-form-item ref="name" label="23.c Action(s) taken by the office(s) mentioned in 22-a" prop="name" :colon="true">
						<a-input
							v-model="form.name"
							@blur="
								() => {
									$refs.name.onFieldBlur();
								}
							"
						/>
					</a-form-item>

					<a-form-item ref="name" label="Files" prop="name" :colon="true">
						<a-upload
							action="https://www.mocky.io/v2/5cc8019d300000980a055e76"
							:default-file-list="defaultFileList"
						>
							<a-button> <a-icon type="upload" /> Click to Upload </a-button>
						</a-upload>
					</a-form-item>


				</a-col>

			</a-row>

			<a-row :gutter="18">
				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>





				</a-col>

				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>



				</a-col>

				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>


				</a-col>
			</a-row>

			<a-row :gutter="18">
				<a-col
					class="gutter-row"
					:span="24"
					:style="{ display: 'block' }"
					:offset="10"
				>
					<a-form-item :colon="true">
						<a-button type="primary" @click="onSubmit">
							Save
						</a-button>

						<a-button style="margin-left: 10px;" @click="resetForm">
							Cancel
						</a-button>
					</a-form-item>
				</a-col>
			</a-row>

		</a-form>
	</div>
</template>

<script>

export default {
	data() {
		return {
			question22: 'Is this project applied for the subject of written notice(s) from the board and/or its deputized zoning administrator to the effect requiring for presentation of locational clearance/certificate of zoning compliance (LC/CZC) or to apply for (LC/CZC)?',
			question23: 'Is the project applied for the subject similar application(s) with the other offices of the board and/or deputized zoning administrator?',
			defaultFileList: [
				{
				uid: '1',
				name: 'xxx.png',
				status: 'done',
				response: 'Server Error 500', // custom error message to show
				url: 'http://www.baidu.com/xxx.png',
				},
				{
				uid: '2',
				name: 'yyy.png',
				status: 'done',
				url: 'http://www.baidu.com/yyy.png',
				},
				{
				uid: '3',
				name: 'zzz.png',
				status: 'error',
				response: 'Server Error 500', // custom error message to show
				url: 'http://www.baidu.com/zzz.png',
				},
			],
			labelCol: { span: 9 },
			wrapperCol: { span: 18 },
			other: "",
			form: {
				name: "",
				region: undefined,
				date1: undefined,
				delivery: false,
				type: [],
				resource: "",
				desc: ""
			},
			rules: {
				name: [
					{
						required: true,
						message: "Please input Activity name",
						trigger: "blur"
					},
					{
						min: 3,
						max: 5,
						message: "Length should be 3 to 5",
						trigger: "blur"
					}
				],
				region: [
					{
						required: true,
						message: "Please select Activity zone",
						trigger: "change"
					}
				],
				date1: [
					{
						required: true,
						message: "Please pick a date",
						trigger: "change"
					}
				],
				type: [
					{
						type: "array",
						required: true,
						message: "Please select at least one activity type",
						trigger: "change"
					}
				],
				resource: [
					{
						required: true,
						message: "Please select activity resource",
						trigger: "change"
					}
				],
				desc: [
					{
						required: true,
						message: "Please input activity form",
						trigger: "blur"
					}
				]
			}
		}
	},
	methods: {
		onSubmit() {
			this.$refs.ruleForm.validate(valid => {
				if (valid) {
					alert("submit!");
				} else {
					console.log("error submit!!");
					return false;
				}
			});
		},
		resetForm() {
			this.$refs.ruleForm.resetFields();
		},
		 handleChange({ file, fileList }) {
			if (file.status !== 'uploading') {
				console.log(file, fileList);
			}
		},
	}
}
</script>

<style lang="scss" scoped>
p {
	color: rgba(0,0,0,.85);
	line-height: 1.5;
}
</style>
