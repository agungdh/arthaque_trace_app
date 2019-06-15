<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arth extends CI_Controller {

	public function aq()
	{
		header("Access-Control-Allow-Origin: *");

		if ($this->input->post('arthaque')) {
			if (!$this->db->get_where('neng', [
				'ndi' => $this->input->post('arthaque')
			])->row()) {
				$this->db->insert('neng', [
					'ndi' => $this->input->post('arthaque')
				]);
			}
		} elseif ($this->input->post('jomblo')) {
			if (!$this->db->get_where('yak', [
				'hemm' => $this->input->post('jomblo')
			])->row()) {
				$this->db->insert('yak', [
					'hemm' => $this->input->post('jomblo')
				]);
			}
		} else {
			redirect('https://www.google.com/');
		}
	}

	public function ue()
	{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Dah ditarok mana aja sii</title>
		</head>
		<body>
			<h3>Dah ditarok mana aja sii</h3>

			<table width="100%" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Domain</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 0;
					foreach ($this->db->get('neng')->result() as $item) {
						$i++;
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $item->ndi; ?></td>
						</tr>
						<?php
					}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>Total</th>
						<th><?php echo $i; ?></th>
					</tr>
				</tfoot>
			</table>

			<hr>

			<table width="100%" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>URL</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 0;
					foreach ($this->db->get('yak')->result() as $item) {
						$i++;
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $item->hemm; ?></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</body>
		</html>
		<?php
	}
}
